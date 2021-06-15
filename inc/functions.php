<?php
const dataFile = "data/messages.txt";
$validation = [];
$input = [];

function validate($data){
    $validation = [];
    if($data['luggage'] == "" || $data['from'] == "" || $data['destination'] == "" || $data['flightNumber'] == "") {
        $validation[] = "Ne visi duomenys pasirinkti.\n";
    }
    if($data['from'] != "" && $data['destination'] == $data['from']) {
        $validation[] = "Išvykimo ir atvykimo vietos negali sutapti.\n";
    }
    if(empty($data['name']) || !preg_match('/[a-zA-Z]/', $data['name'])){   //     /^[a-z ,.'-]+$/i
        $validation[] = "Neteisingai įvestas vardas.\n";
    }
    if(empty($data['lastname']) || !preg_match('/[a-zA-Z]/', $data['lastname'])){   //[a-zA-Z0-9]{3,20}
        echo "neteisingai pavarde";
        $validation[] = "Neteisingai įvesta pavardė.\n";
    }
    if(empty($data['personalCode']) || !preg_match('/^[0-9]{11}$/', $data['personalCode'])){   //[a-zA-Z0-9]{3,20}   //  /^\d{11}$/
        echo "neteisingai ivestas kodas";
        $validation[] = "Neteisingai įvestas asmens kodas.\n";
    }
    if(empty($data['price']) || !preg_match('/^\d+(\.\d{2})$/', $data['price'])){   //[a-zA-Z0-9]{3,20}   //  /^\d{11}$/
        echo "neteisingai kaina";
        $validation[] = "Neteisingai įvesta kaina.\n";
    }
    return $validation;
}


function storeData(){ 
    global $input;
    $content = file_get_contents(dataFile);
    $input = $_POST;
    $input['price']= countPrice();
    $formData = implode(',', $_POST);
    $content .= $formData."/n";
    file_put_contents(dataFile, $content); //rašom į tekstinį failą formos duomenis
}

function showData(){
    $messages = file_get_contents(dataFile, true); // priskiriame failo duomenis
    $messages = explode('/n',$messages); //konvertuojam tekstinio failo duomenis i masyva
    return $messages;
}

function countPrice() {
    global $input;
    global $luggage;
    if (($input['luggage']) == $luggage[1]){
        $input['price']=($input['price'] + 30);
    }
}

function addDate() {
    global $input;
        $input['date']=date("Y-m-d");
}


