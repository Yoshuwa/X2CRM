<?php
return array (
// Menu Text
'Manage Flows'=>'Gérer les flux',
'Create Flow'=>'Créer un flux',
'X2Flow Automation Rules'=>'Règles d&#39;automatisation X2Flow',

// Flow Editor Text
'changed'=>'modifié',
'before'=>'avant de',
'after'=>'après',
'Compare Attribute'=>'Comparer Attribut',
'Current User'=>'Utilisateur actuel',
'Current Month'=>'Mois en cours',
'Day of Week'=>'Jour de la semaine',
'Day of Month'=>'Jour du mois',
'Time of Day'=>'Heure de la journée',
'Current Time'=>'Heure actuelle',
'User Logged In'=>'Utilisateur connecté à',
'On List'=>'Sur liste',
'Add Condition'=>'Ajouter une condition',
'Add Attribute'=>'Ajouter un attribut',

// Trigger Types
'Select a trigger'=>'Sélectionner un déclencheur',
'Action Overdue'=>'Action retard',
'Action Marked Incomplete'=>'Action marquée incomplète',
'Campaign Email Clicked'=>'Campagne Email cliqué',
'Campaign Email Opened'=>'Campagne Email Ouvert',
'Unsubscribed from Campaign'=>'Désabonné de campagne',
'Campaign Web Activity'=>'Activité des campagnes Web',
'Newsletter Email Clicked'=>'Newsletter Email cliqué',
'Newsletter Email Opened'=>'Newsletter Email Ouvert',
'Unsubscribed from Newsletter'=>'Désabonné de la newsletter',
'Tag Added'=>'Tag Ajouté',
'Tag Removed'=>'Tag Enlevée',
'Record Updated'=>'Fiche mise à jour',
'Record Viewed'=>'Vu enregistrement',
'User Signed In'=>'Utilisateur signé en',
'User Signed Out'=>'Utilisateur connecté Out',
'Contact Web Activity'=>'Contactez activité Web',

// Trigger Text
'Triggers when an action becomes overdue. Cronjob must be configured to trigger reliably.'=>'Déclenche quand une action est en souffrance. Cronjob doit être configuré pour déclencher de manière fiable.',
'Time Overdue (s)'=>'Temps retard (s)',
'Triggers when a contact clicks a tracking link in a campaign email.'=>'Déclenche lorsqu&#39;un contact clique sur un lien dans un e-mail de suivi de la campagne.',
'Triggers when a contact opens or clicks on a tracking link in a campaign email.'=>'Se déclenche quand un contact s&#39;ouvre ou clique sur un lien dans un e-mail de suivi de la campagne.',
'Triggers when a contact clicks the "unsubscribe" link in a campaign email.'=>'Déclenche lorsqu&#39;un contact clique sur le lien "unsubscribe" dans un e-mail de la campagne.',
'Triggered when a contact visits your webpage by clicking a link in a campaign email.'=>'Déclenché lorsqu&#39;un contact visite votre page Web en cliquant sur un lien dans un e-mail de la campagne.',
'Triggers when a contact clicks a tracking link in a newsletter email (no contact record available).'=>'Déclenche lorsqu&#39;un contact clique sur un lien de suivi dans un bulletin électronique (aucune trace de contact disponible).',
'Triggers when a contact opens or clicks on a tracking link in a newsletter email (no contact record available).'=>'Se déclenche quand un contact s&#39;ouvre ou clique sur un lien de suivi dans un bulletin électronique (aucune trace de contact disponible).',
'Triggers when a contact clicks the "unsubscribe" link in a newsletter email (no contact record available).'=>'Déclenche lorsqu&#39;un contact clique sur le lien "unsubscribe" dans un bulletin électronique (aucune trace de contact disponible).',
'Triggered when a contact visits a webpage (no contact record available).'=>'Déclenché lorsqu&#39;un contact visite une page Web (aucune trace de contact disponible).',
'Triggers when a new record of the specified type is created.'=>'Se déclenche quand un nouveau record du type spécifié est créé.',
'Triggers when a record of specified type is deleted.'=>'Déclenche quand un enregistrement de type spécifié est supprimé.',
'Triggered by adding one of these tags to a record.'=>'Déclenchée par l&#39;ajout d&#39;un de ces balises à un niveau record.',
'Triggered when some updates a record of the the specified type.'=>'Déclenché lorsque des mises à jour un record du type spécifié.',
'Triggered when a user signs in to X2CRM.'=>'Déclenché quand un utilisateur se connecte à X2CRM.',
'Triggered when a user signs out of X2CRM.'=>'Déclenché lorsque l&#39;utilisateur se déconnecte de X2CRM.',
'Triggered when a contact visits a webpage'=>'Déclenché lorsqu&#39;un contact visite une page Web',
'Triggers when a new contact fills out your web lead capture form.'=>'Se déclenche quand un nouveau contact remplit le formulaire de saisie de plomb web.',

// Action Types
'Flow Actions'=>'Actions de débit',
'Remote API Call'=>'Appel à distance API',
'Post to Activity Feed'=>'Message à Flux d&#39;activité',
'Create Popup Notification'=>'Créer une fenêtre de notification',
'Create Record'=>'Créer un enregistrement',
'Create Action for Record'=>'Créer une action pour enregistrement',
'Delete Record'=>'Supprimer l&#39;enregistrement',
'Email Record'=>'Record Email',
'Email Contact'=>'Email Contacter',
'Add to List'=>'Ajouter à la liste',
'Remove from List'=>'Supprimer de la liste',
'Reassign Record'=>'Réaffecter enregistrement',
'Add or Remove Tags'=>'Ajouter ou supprimer des mots clés',
'Update Record'=>'Mettre à jour la fiche',
'Wait'=>'Attendre',

// Action Text
'Conditional Switch'=>'Commutateur conditionnelle',
'Creates a fork in the automation flow based on your conditions.'=>'Crée une fourchette dans le flux d&#39;automatisation basée sur vos conditions.',
'Call a remote API by requesting the specified URL. You can specify the request type and any variables to be passed with the request. To improve performance, he request will be put into a job queue unless you need it to execute immediately.'=>'Appeler un API à distance en demandant l&#39;URL spécifiée. Vous pouvez spécifier le type de demande et toutes les variables à passer avec la demande. Pour améliorer les performances, il demande sera mis en file d&#39;attente à moins que vous en avez besoin pour exécuter immédiatement.',
'GET'=>'GET',
'POST'=>'POST',
'PUT'=>'PUT',
'DELETE'=>'SUPPRIMER',
'Creates an activity feed event.'=>'Il crée un événement de flux d&#39;activité.',
'Owner of Record'=>'Propriétaire de dossier',
'{Owner of Record}'=>'{Owner of Record}',
'Send a template or custom email to the specified address.'=>'Envoyer un modèle ou e-mail personnalisé à l&#39;adresse indiquée.',
'Creates a new action associated with the record that triggered this flow.'=>'Crée une nouvelle action associé à l&#39;enregistrement qui a déclenché ce flux.',
'Permanently delete this record.'=>'Supprimer définitivement ce dossier.',
'Send a template or custom email to this record\'s email address. Uses the assignee\'s email unless specified.'=>'Envoyer un modèle ou e-mail personnalisé à ce dossier d  &#39;adresse e-mail. Utilise le courrier électronique de la cessionnaire  sauf indication contraire.',
'Add this record to a static list.'=>'Ajouter ce disque à une liste statique.',
'Remove this record from a static list.'=>'Supprimer cet enregistrement à partir d&#39;une liste statique.',
'Assign the record to a user or group, or automatically using lead routing.'=>'Attribuer le dossier pour un utilisateur ou un groupe, ou automatiquement en utilisant le routage plomb.',
'Use Lead Routing'=>'L&#39;utilisation du plomb routage',
'Enter a commna-separated list of tags to add to the record'=>'Entrez une liste commna séparés par des balises à ajouter au dossier',
'Change one or more fields on an existing record.'=>'Changer un ou plusieurs champs d&#39;un enregistrement existant.',
'Delay execution of the remaining steps until the specified time.'=>'Retarder l&#39;exécution des étapes restantes jusqu&#39;à l&#39;heure spécifiée.',
'hours'=>'heures',
'days'=>'jours',
'months'=>'mois',
'Current Timestamp'=>'Timestamp courant',
'Flow configuration data appears to be corrupt.'=>'les données de configuration de débit semble être corrompu.',
'You must configure a trigger event.'=>'Vous devez configurer un événement déclencheur.',
'There must be at least one action in the flow.'=>'Il doit y avoir au moins une action dans l&#39;écoulement.',
'Duration (s)'=>'Durée (s)',
'Create New Flow'=>'Créer un nouveau flux',
'Message'=>'Un message',
'For'=>'Pour',
'Post Type'=>'Post Type',
'Create Notification?'=>'Créer un avis?',
'User Active?'=>'L&#39;utilisateur active?',
'Tags (optional)'=>'Tags (facultatif)',
'seconds (recommended for formulas only)'=>'secondes (recommandé pour les formules seulement)',
);