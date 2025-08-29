<?php

return [
    'failed' => [
        'subject' => 'Échec de votre paiement de :amount :currency',
        'greeting' => 'Bonjour :name,',
        'message' => 'Nous vous informons que le paiement de :amount :currency a échoué. Veuillez vérifier les détails de votre mode de paiement et réessayer.',
        'reason' => 'Raison de l\'échec',
        'solution' => 'Veuillez vérifier les informations de votre carte et réessayer. Si le problème persiste, veuillez contacter votre banque ou utiliser un autre mode de paiement.',
        'contact' => 'Pour toute question, n\'hésitez pas à nous contacter. Nous sommes là pour vous aider.',
        'footer' => 'Ceci est un courriel automatisé. Veuillez ne pas y répondre.',
    ],


    'pending' => [
        'subject' => 'Paiement en attente pour :amount :currency',
        'greeting' => 'Bonjour :name,',
        'message' => 'Nous vous confirmons que votre paiement de :amount :currency est en cours de traitement. Vous recevrez une notification dès que la transaction sera finalisée.',
        'details' => 'Détails de la transaction',
        'transaction_id' => 'ID de la transaction',
        'amount' => 'Montant',
        'date' => 'Date',
        'method' => 'Méthode de paiement',
        'estimated_time' => 'Temps estimé',
        'next_steps' => 'Prochaines étapes',
        'instructions' => 'Voici ce que vous pouvez faire en attendant :',
        'step1' => 'Vérifiez l\'état de votre paiement dans votre compte.',
        'step2' => 'Assurez-vous que votre méthode de paiement est valide.',
        'step3' => 'Contactez votre banque si le paiement ne passe pas ou si vous avez des questions.',
        'contact' => 'Si vous avez des questions ou si vous rencontrez un problème, n\'hésitez pas à contacter notre équipe d\'assistance.',
        'contact_button' => 'Contacter le support',
        'footer' => 'Ceci est un courriel automatisé. Veuillez ne pas y répondre.',
    ],



    'receipt' => [
        'subject' => 'Confirmation de votre paiement #:id',
        'greeting' => 'Bonjour :name,',
        'message' => 'Nous vous confirmons que votre paiement de :amount :currency a été effectué avec succès. Vous trouverez ci-dessous le reçu de votre transaction.',
        'details' => 'Détails de la transaction',
        'transaction_id' => 'ID de la transaction',
        'amount' => 'Montant',
        'date' => 'Date',
        'method' => 'Méthode de paiement',
        'status' => 'Statut',
        'completed' => 'Terminé',
        'merchant' => 'Marchand',
        'description' => 'Description',
        'billing_info' => 'Informations de facturation',
        'customer_name' => 'Nom du client',
        'customer_email' => 'Courriel du client',
        'billing_address' => 'Adresse de facturation',
        'thank_you' => 'Merci pour votre achat !',
        'footer' => 'Ceci est un courriel automatisé. Veuillez ne pas y répondre.',
    ],

    'refund' => [
        'subject' => 'Confirmation de votre remboursement de :amount :currency',
        'greeting' => 'Bonjour :name,',
        'message' => 'Nous vous confirmons que le remboursement de :amount :currency a été effectué. Le montant devrait être crédité sur votre compte dans les prochains jours, selon le délai de traitement de votre banque.',
        'details' => 'Détails du remboursement',
        'transaction_id' => 'ID de la transaction originale',
        'refund_id' => 'ID du remboursement',
        'amount' => 'Montant remboursé',
        'date' => 'Date du remboursement',
        'reason' => 'Raison du remboursement',
        'original_amount' => 'Montant de la transaction originale',
        'processing_info' => 'Informations sur le traitement',
        'processing_time' => 'Le processus de remboursement peut prendre de 5 à 10 jours ouvrables. Le délai exact dépend de votre banque et de la méthode de paiement utilisée.',
        'expected_date' => 'Date d\'arrivée prévue',
        'contact' => 'Si vous n\'avez pas reçu le montant après la date prévue, veuillez contacter votre banque ou notre équipe d\'assistance.',
        'footer' => 'Ceci est un courriel automatisé. Veuillez ne pas y répondre.',
    ],


    'success' => [
        'subject' => 'Confirmation de votre paiement de :amount :currency',
        'greeting' => 'Bonjour :name,',
        'message' => 'Nous vous confirmons que votre paiement de :amount :currency a été effectué avec succès. Vous trouverez ci-dessous le récapitulatif de votre transaction.',
        'details' => 'Détails de la transaction',
        'transaction_id' => 'ID de la transaction',
        'amount' => 'Montant',
        'date' => 'Date',
        'method' => 'Méthode de paiement',
        'thank_you' => 'Merci pour votre achat !',
        'footer' => 'Ceci est un courriel automatisé. Veuillez ne pas y répondre.',
    ],
];
