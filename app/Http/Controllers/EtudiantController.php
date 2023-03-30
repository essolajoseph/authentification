<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Aws\Textract\TextractClient;

class EtudiantController extends Controller
{
    public function get(){

        $client = new TextractClient([
            'version' => 'latest',
            'region' => 'us-east-1', // pass your region
            'credentials' => [
                'key'    => 'AKIAXLYBGGGMXOASXUVI',
                'secret' => '8pQX/GJX420DrpF4/00xc1x98seqDT/KW1iB1crM'
            ],
            
        ]);
        
        // try {
        //   $result = $textractClient->detectDocumentText([
        //       'Document' => [
        //           'Bytes' => file_get_contents(getcwd().'/test2.jpeg'),
        //       ]
        //   ]);
        //   foreach ($result->get('Blocks') as $block) {
        //       if ($block['BlockType'] != 'WORD') continue;
               
        //       echo $block['Text']." ";
        //   }
        // } catch (Aws\Textract\Exception\TextractException $e) {
        //   // output error message if fails
        //   echo $e->getMessage();
        // }
        
        // The file in this project.
        $filename = "test3.jpeg";
        $file = fopen($filename, "rb");
        $contents = fread($file, filesize($filename));
        // print_r($contents);
        fclose($file);
        $options = [
            'Document' => [
                'Bytes' => $contents
            ],
            'FeatureTypes' => ['FORMS','TABLES'], 
        ];
        $result = $client->analyzeDocument($options);
        $blocks = $result['Blocks'];
        $tab=array();
        foreach ($blocks as $key => $value) {
            if (isset($value['BlockType']) && $value['BlockType']) {
                $blockType = $value['BlockType'];
                if (isset($value['Text']) && $value['Text']) {
                    $text = $value['Text'];
                    if ($blockType == 'WORD') {
                    //	echo "Word: ". print_r($text, true) . "\n";
                    } else if ($blockType == 'LINE') {
                    //	echo "Line: ". print_r($text, true) . "\n";
                array_push($tab,$text);
                    }
                }
            }
        }
        return json_encode($tab);
    }
}
