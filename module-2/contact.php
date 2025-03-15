<?php

$contacts = [] ;

function addContact(array &$contacts , string $name , string $email , string $phone){
$contacts[] = ['name'=> $name, 'email'=>$email, 'phone'=> $phone ];

}
function displayContacts(array $contacts):void
{
    if(empty($contacts)){
        echo "No Contacts available.\n";
    }else{
        foreach($contacts as $contact){
            echo "Name : {$contact['name']},
            Email : {$contact['email']},
            Phone : {$contact['phone']}";
        }
    }
}



while(true){
    echo "\nContact Management App: \n";
    echo "1. Add Contact\n2. View Contact\n3. Exit\n";
    $choice =(int)readline("choice an option: ");

    if($choice === 1){
        $name = readline("Enter Your Name: ");
        $email = readline("Enter Your email: ");
        $phone = readline("Enter Your phone: ");

        addContact( $contacts, $name , $email , $phone);
        echo "$name added to contacts.\n";
        echo "$email added to contacts.\n";
        echo "$phone added to contacts.\n";
    }
    elseif($choice === 2){
        displayContacts($contacts);
    }
    elseif($choice === 3){
        echo "Exiting...\n;";
        break;
    }else{
        echo "Invalid Choice . Please try again . \n";
    }
}