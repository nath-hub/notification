// resources/lang/fr/emails.php
<?php

return [
    'welcome' => [
        'subject' => 'Bienvenue sur notre plateforme !',
        'greeting' => 'Bonjour :name,',
        'intro' => 'Nous sommes ravis de vous accueillir sur notre plateforme.',
        'instructions' => 'Pour commencer, voici quelques étapes :',
        'step1' => 'Complétez votre profil',
        'step2' => 'Explorez nos fonctionnalités',
        'step3' => 'Contactez-nous si vous avez des questions',
        'button' => 'Go',
        'closing' => 'Merci de nous avoir rejoint !',
        'signature' => 'Cordialement, L\'équipe UBIX_GROUP',
        'footer' => 'Cet email a été envoyé automatiquement, merci de ne pas y répondre.'
    ],

    'verification' => [
        'subject' => 'Vérification de votre adresse email',
        'greeting' => 'Bonjour :name,',
        'message' => 'Utilisez le code suivant pour vérifier votre adresse email :',
        'expiration' => 'Ce code expirera dans 30 minutes.',
        'code' => ':code',
        'instructions' => 'Pour réinitialiser votre mot de passe : ',
        'step1' => ' Copiez le code de vérification ci-dessus',
        'step2' => ' Rendez-vous sur la page de réinitialisation de mot de passe',
        'step3' => ' Entrez le code et votre nouveau mot de passe',
        'reset_button' => 'Réinitialiser mon mot de passe',
        'warning' => 'Ne partagez jamais ce code avec qui que ce soit. Notre équipe ne vous demandera jamais votre code de vérification. Si vous n\'avez pas demandé cette vérification, veuillez ignorer cet email.',
        'footer' => 'Cet email a été envoyé automatiquement, merci de ne pas y répondre.'
    ],



    'password_reset' => [
        'subject' => 'Réinitialisation de votre mot de passe - Code de sécurité',
        'greeting' => 'Bonjour :name,',
        'message' => 'Vous avez demandé la réinitialisation de votre mot de passe. Utilisez le code de vérification ci-dessous pour compléter le processus.',
        'your_code' => 'Votre code de vérification',
        'code_validity' => 'Ce code est valable pendant 30 minutes',
        'security_warning' => 'Sécurité importante',
        'warning' => 'Ne partagez jamais ce code avec qui que ce soit. Notre équipe ne vous demandera jamais votre code de vérification.',
        'instructions' => 'Pour réinitialiser votre mot de passe : ',
        'step1' => 'Copiez le code de vérification ci-dessus',
        'step2' => 'Rendez-vous sur la page de réinitialisation de mot de passe',
        'step3' => 'Entrez le code et votre nouveau mot de passe',
        'reset_button' => 'Réinitialiser mon mot de passe',
        'expiration' => 'Ce code expirera dans 30 minutes pour des raisons de sécurité.',
        'alternative' => 'Si vous préférez utiliser un lien direct, cliquez sur le bouton ci-dessus.',
        'support_text' => 'Si vous rencontrez des problèmes ou n\'avez pas demandé cette réinitialisation, veuillez contacter immédiatement notre support technique.',
        'footer' => 'Sécurité de votre compte - © ' . date('Y') . ' ' . config('app.name') . '. Tous droits réservés.',
        'automated_message' => 'Cet email a été envoyé automatiquement, merci de ne pas y répondre.'
    ],

    'password_reset_success' => [
        'subject' => 'Mot de passe modifié avec succès',
        'greeting' => 'Bonjour :name,',
        'message' => 'Votre mot de passe a été modifié avec succès le :date à :time.',
        'security_message' => 'Si vous n\'êtes pas à l\'origine de cette modification, veuillez contacter immédiatement notre support.',
        'footer' => 'Protection de votre compte'
    ],

     'account_verified' => [
        'subject' => '✅ Votre compte a été vérifié avec succès !',
        'congratulations' => 'Félicitations :name !',
        'welcome_message' => 'Votre compte a été vérifié avec succès et est maintenant pleinement activé.',
        'next_steps' => 'Vous pouvez maintenant profiter de toutes les fonctionnalités de notre plateforme :',
        'step1' => 'Accéder à votre tableau de bord personnel',
        'step2' => 'Compléter votre profil utilisateur',
        'step3' => 'Explorer toutes nos fonctionnalités',
        'step4' => 'Commencer à utiliser nos services',
        'cta_button' => 'Accéder à mon tableau de bord',
        'security_title' => 'Sécurité du compte',
        'security_message' => 'Votre compte est maintenant sécurisé et vérifié. Si vous remarquez une activité suspecte, veuillez contacter immédiatement notre support.',
        'thank_you' => 'Merci de nous avoir choisi ! Nous sommes ravis de vous compter parmi nos membres.',
        'footer' => '© :year ' . config('app.name') . ' - Tous droits réservés. | Protection de vos données'
    ],

      'success' => [
        'subject' => '✅ Paiement de :amount :currency confirmé',
        'greeting' => 'Bonjour :name,',
        'message' => 'Votre paiement de :amount :currency a été traité avec succès.',
        'details' => 'Détails de la transaction :',
        'transaction_id' => 'ID Transaction',
        'amount' => 'Montant',
        'date' => 'Date',
        'method' => 'Méthode de paiement',
        'thank_you' => 'Merci pour votre confiance.',
        'footer' => 'Cet email confirme votre transaction.'
    ],

    'failed' => [
        'subject' => '❌ Échec du paiement de :amount :currency',
        'greeting' => 'Bonjour :name,',
        'message' => 'Votre tentative de paiement de :amount :currency a échoué.',
        'reason' => 'Raison',
        'solution' => 'Veuillez réessayer ou utiliser un autre moyen de paiement.',
        'contact' => 'Si le problème persiste, contactez notre support.',
        'footer' => 'Service de paiement'
    ],

     'refund' => [
        'subject' => '🔄 Remboursement de :amount :currency effectué',
        'greeting' => 'Bonjour :name,',
        'message' => 'Un remboursement de :amount :currency a été effectué sur votre compte.',
        'details' => 'Détails du remboursement :',
        'transaction_id' => 'ID Transaction originale',
        'refund_id' => 'ID Remboursement',
        'amount' => 'Montant remboursé',
        'date' => 'Date du remboursement',
        'reason' => 'Motif du remboursement',
        'original_amount' => 'Montant original',
        'processing_info' => 'Informations de traitement',
        'processing_time' => 'Le traitement peut prendre 5 à 10 jours ouvrés selon votre institution financière.',
        'expected_date' => 'Date prévue de réception',
        'contact' => 'Pour toute question concernant ce remboursement, contactez notre service client.',
        'footer' => 'Le traitement peut prendre quelques jours selon votre banque.'
    ],

    'pending' => [
        'subject' => '⏳ Paiement de :amount :currency en attente',
        'greeting' => 'Bonjour :name,',
        'message' => 'Votre paiement de :amount :currency est en cours de traitement.',
        'details' => 'Détails de la transaction :',
        'transaction_id' => 'ID Transaction',
        'amount' => 'Montant',
        'date' => 'Date',
        'method' => 'Méthode de paiement',
        'estimated_time' => 'Temps de traitement estimé',
        'next_steps' => 'Prochaines étapes',
        'instructions' => 'Votre transaction est en cours de validation :',
        'step1' => 'Ne soumettez pas à nouveau le paiement',
        'step2' => 'Surveillez votre email pour la confirmation finale',
        'step3' => 'Contactez-nous si le statut reste inchangé après 48h',
        'contact' => 'Pour toute question, notre équipe de support est à votre disposition.',
        'footer' => 'Merci de votre patience.'
    ],

    'receipt' => [
        'subject' => '🧾 Reçu de transaction #:id',
        'greeting' => 'Bonjour :name,',
        'message' => 'Voici le reçu de votre transaction de :amount :currency.',
        'details' => 'Détails de la transaction :',
        'transaction_id' => 'ID Transaction',
        'amount' => 'Montant',
        'date' => 'Date et heure',
        'method' => 'Méthode de paiement',
        'status' => 'Statut',
        'merchant' => 'Marchand',
        'description' => 'Description',
        'billing_info' => 'Informations de facturation',
        'customer_name' => 'Nom du client',
        'customer_email' => 'Email du client',
        'billing_address' => 'Adresse de facturation',
        'thank_you' => 'Merci pour votre achat !',
        'footer' => 'Conservez ce reçu pour vos archives. Ce document fait foi de transaction.'
    ]
];