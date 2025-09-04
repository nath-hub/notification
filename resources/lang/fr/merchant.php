<?php

return [

    'welcome' => [
        'subject' => 'Bienvenue sur :name - Votre compte marchand est créé',
        'greeting' => 'Bonjour :name,',
        'message' => 'Félicitations ! Votre compte marchand ":business" a été créé avec succès sur notre plateforme de paiement.',
        'next_steps' => 'Prochaines étapes pour activer votre compte :',
        'step1' => 'Complétez votre profil marchand',
        'step2' => 'Soumettez vos documents KYC/AML',
        'step3' => 'Configurez vos webhooks de notification',
        'step4' => 'Intégrez notre API à votre système',
        'account_info' => 'Informations de votre compte',
        'business_name' => 'Nom de l\'entreprise',
        'contact_email' => 'Email de contact',
        'merchant_id' => 'ID Marchand',
        'support_contact' => 'Notre équipe support est disponible pour vous aider dans votre intégration.',
        'footer' => 'Bienvenue dans notre réseau de marchands !'
    ],
    'configuration' => [
        'subject' => 'Configuration de votre Webhook',
        'greeting' => 'Bonjour :name,',
        'message' => 'Ce courriel confirme que la configuration de votre webhook a été mise à jour avec succès. Vous recevrez désormais des notifications pour les événements que vous avez spécifiés.',
        'details' => 'Détails de la configuration :',
        'webhook_url' => 'URL du Webhook',
        'secret_key' => 'Clé Secrète',
        'events' => 'Événements configurés',
        'status' => 'Statut',
        'configured_at' => 'Configuré le',
        'security_notes' => 'Notes de sécurité importantes',
        'security_warning' => 'Votre clé secrète est un élément de sécurité essentiel. Ne la partagez jamais et conservez-la en lieu sûr.',
        'security_tip1' => 'Vérifiez toujours la signature de la requête pour valider sa source.',
        'security_tip2' => 'Utilisez le protocole HTTPS pour sécuriser la transmission des données.',
        'security_tip3' => 'Ne stockez pas la clé secrète dans un code client.',
        'testing' => 'Testez votre configuration',
        'test_instructions' => 'Pour tester votre endpoint, vous pouvez simuler un événement depuis votre tableau de bord marchand. Cela vous permettra de valider votre intégration et de vous assurer que vous recevez les données correctement.',
        'support_contact' => 'Si vous avez des questions ou si vous avez besoin d\'aide, n\'hésitez pas à contacter notre équipe support.',
        'footer' => 'Ceci est un courriel de service. Veuillez ne pas y répondre.'
    ],

    'kyc_approved' => [
        'subject' => 'Statut de votre vérification KYC : Approuvée',
        'message' => 'Félicitations ! Votre demande de vérification KYC a été approuvée avec succès. Votre compte est maintenant entièrement activé et vous pouvez accéder à toutes les fonctionnalités de notre plateforme.',
        'next_steps' => 'Vous êtes prêt à commencer !',
    ],

    'kyc_rejected' => [
        'subject' => 'Statut de votre vérification KYC : Rejetée',
        'message' => 'Nous avons examiné les documents que vous avez soumis pour la vérification de votre compte. Malheureusement, votre demande a été rejetée.',
        'reason' => 'Raison du rejet',
        'default_reason' => 'Les documents soumis ne correspondent pas à nos critères de vérification. Plus exactement :motif_statut',
        'instructions' => 'Veuillez soumettre à nouveau vos documents en suivant les instructions de notre guide de vérification. Si vous pensez qu\'il s\'agit d\'une erreur, n\'hésitez pas à contacter notre équipe support pour obtenir de l\'aide.',
    ],

    'kyc_validation' => [
        'greeting' => 'Bonjour :name,',
        'status_approved' => 'Approuvée',
        'status_rejected' => 'Rejetée',
        'details' => 'Détails de la demande',
        'business_name' => 'Nom de l\'entreprise',
        'reference_id' => 'Numéro de référence',
        'status_date' => 'Date du statut',
        'contact' => 'Si vous avez des questions, n\'hésitez pas à nous contacter.',
        'footer' => 'Ceci est un courriel automatisé. Veuillez ne pas y répondre.',
    ],
];
