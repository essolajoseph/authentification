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
                'key'    => 'AKIAUR6GH74TAWWQ2Y6A',
                'secret' => 'LLVtma9Mo26By69Qpl7oeit+LCRQsEHfdWq6iwmq'
            ],
            
        ]);
        
    
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
