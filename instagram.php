<?php
    include 'vendor/autoload.php';

    try
    {
        \InstagramAPI\Instagram::$allowDangerousWebUsageAtMyOwnRisk = true;
        $ig = new \InstagramAPI\Instagram();
        $username = '_wondergram';
        $password = 'WondergramApp97?';
        $login = $ig->login($username, $password);
        print_r($login);
        
        $metadata = [
            'hashtags' => [
                // Note that you can add more than one hashtag in this array.
                [
                    'tag_name'         => 'test', // NOTE: This hashtag MUST appear in the caption (it does NOT include the '#' here).
                    'x'                => 0.5, // Range: 0.0 - 1.0
                    'y'                => 0.5, // Note that x = 0.5 and y = 0.5 is center of screen.
                    'width'            => 0.24305555, // Percentage: 0.0 - 1.0
                    'height'           => 0.07347973, // Percentage: 0.0 - 1.0
                    'rotation'         => 0.0,
                    'is_sticker'       => false, // Don't change this value.
                    'use_custom_title' => false, // Don't change this value.
                ],
                // ...
            ],
            'caption' => '#test This is a great API!',
        ];
        $photoFilename = '../../../../home/Davide/Scaricati/Img.jpeg';
        $ig->story->uploadPhoto($photoFilename, $metadata);
    }
    catch(Exception $e)
    {
        echo $e->getMessage();
    }
?>