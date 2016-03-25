<?php

namespace ARPCCoreBundle\Services\Csv;

use ARPCCoreBundle\Entity\Player;
use ARPCCoreBundle\Entity\Club;


class PlayerCsvImport
{
    private $entityManager;
    
    public function __construct(\Doctrine\ORM\EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    
    protected function convert($filename, $header = NULL, $delimiter = ';') 
    {
        if(!file_exists($filename) || !is_readable($filename))
        {
            return false;
        }
        
        $data = array();
        
        if(($handle = fopen($filename, 'r')) !== false)
        {
            while(($row = fgetcsv($handle, 1000, $delimiter)) !== false)
            {
                if(!$header)
                {
                    $header = $row;
                }
                else
                {
                    $data[] = array_combine($header, $row);
                }
            }
            fclose($handle);
        }
        
        return $data;
    }
    
    public function import($file, $header = NULL)
    {
        // Getting php array of data from CSV
        $data = $this->convert($file, $header);
        
        // Getting doctrine manager
        $em = $this->entityManager;
        // Turning off doctrine default logs queries for saving memory
        $em->getConnection()->getConfiguration()->setSQLLogger(null);
        
        // Define the size of record, the frequency for persisting the data and the current index of records
        $batchSize = 20;
        $i = 1;
        // Processing on each row of data
        foreach($data as $row)
        {
            $player = $em->getRepository('ARPCCoreBundle:Player')
                       ->findOneByFfeCode($row['ffeCode']);
						 
            if(!is_object($player))
            {
                $player = new Player();
                $player->setFfeCode($row['ffeCode']);
            }
            
            // Updating info
            $player->setFideCode($row['fideCode']);
            $player->setName($row['name']);
            $player->setSurname($row['surname']);
            
            
            $club = $em->getRepository('ARPCCoreBundle:Club')
                       ->findOneByCode($row['club']);
						 
            if(!is_object($club))
            {
                $club = new Club();
                $club->setCode($row['club']);
                $club->setLabel($row['club']);
            }
            
            $player->setClub($club);
			
            $em->persist($player);
            
	    // Each $batchSize players persisted we flush everything
            if (($i % $batchSize) === 0)
            {
                $em->flush();
                $em->clear();
            }
 
            $i++;
        }
        
        // Flushing and clear data on queue
        $em->flush();
        $em->clear();
    }
}