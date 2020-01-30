<?php

function bytesToHuman($bytes, $precision = 2)
{
    $units = [' bytes', ' KB', ' MB', ' GB', ' TB'];

    for ($i = 0; $bytes > 1024; $i++) {
        $bytes /= 1024;
    }

    return round($bytes, $precision) . $units[$i];
}

function enabled_countries(  ) {
    //return ['hk', 'sg', 'tw', 'my', 'cn', 'th', 'vn', 'in', 'id', 'ph', 'uk', 'mu'];
	
	return ['mu'];
}

function supported_language( $country ) {

    switch ( $country ) {
        case 'hk':
            return ['en', 'tc'];
        case 'sg':
            return ['en'];
        case 'tw':
            return ['tc'];
        case 'cn':
            return ['sc'];
        case 'ph':
            return ['en'];
        case 'th':
            return ['en', 'th'];
        case 'vn':
            return ['en', /* 'vn' */];
        case 'id':
            return ['en', 'id'];
        case 'in':
            return ['en'];
        case 'uk':
            return ['en'];
	 case 'mu':
            return ['en'];
        default:
            return ['en'];
    }

}

function facebookLinkForCountry( $country ) {

    switch ( $country ) {
        case 'hk':  return "https://www.facebook.com/AVITAHongKong/";
        case 'sg':  return "https://www.facebook.com/AvitaSG/";
        case 'tw':  return "https://www.facebook.com/AVITATaiwan/";
        case 'th':  return 'https://www.facebook.com/AvitaTH/';
        case 'in':  return 'https://www.facebook.com/AvitaIndia/';
        case 'cn':
        case 'ph':
        case 'vn':
        case 'id':
        case 'uk':
        case 'mu': return 'https://www.facebook.com/AVITAMau/';
        default:    return "";
    }
}

function instagramLinkForCountry( $country ) {

    switch ( $country ) {
        case 'hk':  return "https://www.instagram.com/avitahongkong/";
        case 'sg':  return "https://www.instagram.com/avitasingapore/";
        case 'tw':  return "https://www.instagram.com/avita_taiwan/";
        case 'th':  return 'https://www.instagram.com/avitathailand/';
        case 'in':  return 'https://www.instagram.com/avitaind/';
        case 'cn':
        case 'ph':
        case 'vn':
        case 'id':
        case 'uk':
        case 'mu':  return 'https://www.instagram.com/avitamauritius/';
        default:    return "";
    }
}

function twitterLinkForCountry( $country ) {

    switch ( $country ) {
        case 'in':  return 'https://twitter.com/AvitaIndia';
        case 'hk':
        case 'sg':
        case 'tw':
        case 'th':
        case 'cn':
        case 'ph':
        case 'vn':
        case 'id':
        case 'uk':
        case 'mu': return 'https://twitter.com/AvitaMauritius';
        default:    return "";
    }
}


function metaKeywordByCountryAndLanguage( $country, $language ) {

    // Default
    $keyword = "AVITA LIBER 12.5\", Core i5 Intel CPU, Windows Hello, fingerprint, USB 3.0 ports, USB Type-C, USB-C";

    switch ( $country ) {
        case 'bd':
		    {
                $keyword = "AVITA LIBER 12.5\", Core i5 Intel CPU, Windows Hello, fingerprint, USB 3.0 ports, USB Type-C, USB-C";
            }
            break;
 
    }

    return $keyword;
}

function metaDescriptionByCountryAndLanguage( $country, $language ) {

    // Default
    $description = "AVITA is a US based smart technology firm which prides itself on its elegant and highly efficient catalog of gadgets which transcend various categories. These gadgets not only make your work life balance tenable but augment your personality as well.";

    switch ( $country ) {
        case 'bd':
           {
                $description = "AVITA is a US based smart technology firm which prides itself on its elegant and highly efficient catalog of gadgets which transcend various categories. These gadgets not only make your work life balance tenable but augment your personality as well.";
            }
            break;
    
    }

    return $description;

}



function googleAnalyticCode( $country ) {

    switch ( $country ) {
        case 'id' : return "UA-128035503-8";
        case 'ph' : return "UA-128035503-9";
        case 'vn' : return 'UA-128035503-7';
        case 'cn' : return 'UA-128035503-10';
        case 'in' : return 'UA-128035503-6';
        case 'my' : return 'UA-128035503-3';
        case 'sg' : return 'UA-128035503-5';
        case 'tw' : return 'UA-128035503-4';
        case 'th' : return 'UA-128035503-11';

    }


    return 'UA-106387992-1';    // Default


}
function GoogleMap( $key ) {

    return 'AIzaSyDkjCWGYO6wojvQEwcNm09P_H7XeYoji9I';    // Default

}
function BaiduMap( $key ) {

    return '123';    // Default

}
