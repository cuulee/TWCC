<?php
/*

	Copyright Clément Ronzon
	

*/

define('LOCALE', 'fr_FR');
define('PAYPAL_LOCALE', 'fr_FR');
@setlocale(LC_TIME, LOCALE.'.UTF8', 'fra');
if (preg_match('%windows%i', $_SERVER['SystemRoot']) || preg_match('%winnt%i', $_SERVER['SystemRoot'])) @setlocale(LC_TIME, 'french'); // Page de code pour serveur sous Windows (installation locale)
define('DATE_FORMAT_LONG', '%A %d %B %Y');

define('APPLICATION_TITLE', 'The World Coordinate Converter');
define('APPLICATION_TITLE_BIS', '<sup>*</sup>');
define('APPLICATION_TITLE_TER', '*Le convertisseur de coordonées universel');
define('TRANSLATE', 'Traduire');
define('APPLICATION_DESCRIPTION', 'TWCC, Le convertisseur de coordonnées universel est un outil de conversion de coordonnées géodésiques couvrant une grande plage de systèmes de référence.');
define('LANGUAGE_CODE', 'fr');
define('APPLICATION_LICENSE', '<a href="http://creativecommons.org/licenses/by-nc/3.0/deed.'.LANGUAGE_CODE.'" target="_blank" title="CC BY-NC"><img src="http://i.creativecommons.org/l/by-nc/3.0/80x15.png" alt="CC BY-NC" style="border:0 none;"></a>');

define('WORLD', 'Monde');
define('UNIT_DEGREE', '°');
define('UNIT_MINUTE', '\'');
define('UNIT_SECOND', '"');
define('UNIT_DEGREE_EAST', '°E');
define('UNIT_DEGREE_NORTH', '°N');
define('UNIT_METER', 'm');
define('UNIT_KILOMETER', 'km');
define('LABEL_LNG', 'Lng = ');
define('LABEL_LAT', 'Lat = ');
define('LABEL_X', 'X = ');
define('LABEL_Y', 'Y = ');
define('LABEL_ZONE', 'Fuseau = ');
define('LABEL_HEMI', 'Hémisphère = ');
define('LABEL_CONVERGENCE', 'Convergence = ');
define('LABEL_CSV', 'CSV :');
define('LABEL_FORMAT', 'Format :');
define('OPTION_E', 'E');
define('OPTION_W', 'O');
define('OPTION_N', 'N');
define('OPTION_S', 'S');
define('OPTION_DMS', 'Deg. min. sec. ');
define('OPTION_DD', 'Deg. décimaux');
define('OPTION_NORTH', 'Nord');
define('OPTION_SOUTH', 'Sud');
define('OPTION_CSV', 'CSV');
define('OPTION_MANUAL', 'Manuel');
define('OPTION_M', 'Mètres ');
define('OPTION_KM', 'Kilomètres');

define('TAB_TITLE_1', 'Adresse');
define('TAB_TITLE_2', 'Plus d\\\'infos.');
define('DRAG_ME', 'Déplacez moi !');
define('NEW_SYSTEM_ADDED', 'Le nouveau système a été ajouté, vous pourrez le trouver sous le nom de ');
define('CRS_ALREADY_EXISTS', 'Le système que vous tentez d\'ajouter est déjà présent dans TWCC. Vous pouvez le trouver dans les listes déroulantes sous: ');
define('ELEVATION', 'Altitude :');
define('ADDRESS', 'Adresse :');
define('ZOOM', 'Zoomer');
define('NO_ADDR_FOUND', 'Aucune adresse n\\\'a été trouvée.');
define('GEOCODER_FAILED', 'Geocode a échoué pour la raison suivante : ');

define('CREDIT', 'Crédit :');
define('HOSTING', 'Hébergement:');
define('CONSTANTS', 'Constantes :');
define('LIBRARIES', 'Bibliothèques :');
define('MAPS', 'Cartes :');
define('GO', 'Chercher');
define('SEARCH_BY_ADDRESS', 'Recherche par adresse :');
define('HOME', 'Accueil');
define('ABOUT', 'A propos de TWCC');
define('CONTACT_US', 'Nous contacter');
define('DONATE', 'Faire un don');
define('WE_NEED_YOU','Nous avons besoin de votre aide!');
define('SUPPORT_TEXT','Nous comptons sur le soutien généreux des utilisateurs de TWCC pour continuer à maintenir et à améliorer ce site web gratuit.<br>Votre argent peut faire une différence et soutenir la cause aujourd\'hui.');
define('HOW_WE_PLAN','Comment nous prévoyons d\'utiliser les fonds:<br><ul>
<li>Conception d\'une interface pour appareils mobiles, smartphones et tablettes.</li>
<li><span style="color:#808080">Location d\'un nouveau serveur afin de fournir un service meilleur et plus rapide.</span></li>
</ul>');
define('LAST_5_DONORS','Merci aux donateurs!<br>Liste des 5 derniers donateurs:');
define('CHANGELOG', 'Changelog');
define('SELECT_YOUR_LANGUAGE', 'Langue : ');

define('HELP', 'Aide');
define('CLOSE', 'Fermer');
define('HELP_1', 'Sélectionnez le système de référence dans lequel sont exprimées vos coordonnées.');
define('HELP_2', 'Sélectionnez le système de référence de destination.');
define('HELP_3', 'Entrez vos coordonnées.</p>
								<div><b>OU</b></div>
								<p>Cliquez sur la carte.</p>
								<div><b>OU</b></div>
								<p>Déplacez l\'icône sur la carte.</p>
								<div><b>OU</b></div>
								<p>Entrez une adresse dans la bare de recherche.');
define('HELP_4', 'Appuyez pour convertir vos coordonnées.');
define('PREVIOUS', 'Précédent');
define('NEXT', 'Suivant');
define('FINISH', 'Fin.');
define('LOADING', 'Chargement en cours, veuillez patienter...');
define('YOU_CANT_FIND', 'Vous ne trouvez pas votre système dans la liste ?');
define('UNDEFINED_TITLE', 'Titre non défini');
define('CONVERT', 'Convertir');
define('SYSTEM_DEFINITION', 'Définition du système');

define('OPTIONS', 'Options :');
define('MODE', 'Mode :');
define('CONVENTION_TITLE', 'Convention');
define('CONVENTION', CONVENTION_TITLE.' <a href="" title="'.HELP.'" class="convention">[?]</a> :');
define('SURVEY', 'Survey');
define('GAUSS_BOMFORD', 'Gauss-Bomford');
define('AUTO_ZOOM', 'Zoom automatique :');
define('PRINT_CURRENT_MAP', 'Imprimer la carte :');

define('CUSTOM_SYSTEM', 'Système de référence défini par l\'utilisateur');
define('SEARCH_SYSTEM', 'Cherchez le format <span class="underlined"><a href="'.DIR_WS_IMAGES.'snippet_proj4js_format.png" class="snippet">Proj4js</a></span> sur <span class="underlined">Spatial Reference</span> :');
define('SEARCH_EXAMPLE', 'Ex: European Datum 1950');
define('SEARCH', 'Chercher');
define('COME_BACK', '<span class="underlined">Revenez</span> et ajoutez la définition du nouveau système dans <span class="underlined">TWCC</span> :');
define('SYSTEM_EXAMPLE', '<a href="" class="toggle-next">Exemples...</a>
													<ul style="display:none;" class="toogle-me"><li>+title=ED 1950 (Deg) +proj=longlat +ellps=intl +no_defs</li>
													<li>EPSG:4326</li>
													<li>ESRI:37231</li>
													<li>IAU2000:29901</li>
													<li>SR-ORG:38</li>
													<li>IGNF:RRAF91</li>
													<li>urn:ogc:def:crs:epsg:1:4326</li>
													<li>http://www.epsg.org/#4326</li>
													<li>http://librairies.ign.fr/geoportail/resources/RIG.xml#RRAF91</li>
													<li>http://interop.ign.fr/registers/ign/RIG.xml#RRAF91</li></ul>');
define('ADD', 'Ajouter');
define('FREQUENT_USE', 'Vous utilisez ce système fréquemment ?<br>Contactez-nous et nous l’ajouterons définitivement à TWCC !');

define('DO_RESEARCH', 'Rechercher');
define('CLOSE_ON_SELECT', 'Fermer automatiquement');
define('RESEARCH', 'Recherche de système');
define('RESEARCH_FORM', 'Formulaire de recherche');
define('CRS_CODE', 'Code');
define('CRS_NAME', 'Nom (utiliser le caractère % comme jocker)');
define('CRS_COUNTRY', 'Pays');
define('OPTN_ALL', 'Tous');
define('RESULT', 'Résultat de la recherche');
define('RESULT_EMPTY', 'La recherche n\'a retourné aucun résultat');
define('RESULT_FIRST', 'Saisissez au moins un critère de recherche et cliquez sur ');

define('PLEASE_FILL_FORM', 'Veuillez remplir le formulaire ci-dessous.');
define('EMAIL', 'E-mail :');
define('MESSAGE', 'Message :');
define('SEND_MESSAGE', 'Envoyer');
define('MESSAGE_SENT', 'Merci !\\n\\rVotre message a été envoyé.\\n\\rNous en tiendrons compte dès que possible.');
define('MESSAGE_NOT_SENT', 'Désolé, votre message n\'a pas été envoyé.\\n\\rVeuillez essayer à nouveau.\\n\\rErr. code ');
define('MESSAGE_WRONG_EMAIL', 'L\'e-mail que vous avez saisi ne semble pas être valide.\\n\\rVeuillez essayer à nouveau.');

define('W3C_HTML', '<a href="http://validator.w3.org/check?uri=referer" title="W3C XHTML 1.0 compliant" target="_blank"><img src="http://www.w3.org/Icons/valid-xhtml10-blue.png" alt="W3C XHTML 1.0 compliant" style="border:0px none;height:15px;"></a>');
define('ABOUT_CONTENT', '<h2>Qu\'est ce que TWCC ?</h2>
					<p>TWCC, "The World Coordinate Converter", qui signifie "Le convertisseur de coordonnées universel",
					est un outil de conversion de coordonnées géodésiques couvrant une grande plage de systèmes de référence.</p>
					<p>Plusieurs outils de conversion de coordonnées existent déjà, cependant voici ce qui fait la force de TWCC :</p>
					<ul><li>Cet outil est <b>intuitif et simple</b> d\'utilisation.</li>
					<li>L\'ajout de systèmes définis par l\'utilisateur et l\'utilisation d\'une carte interactive font sa <b>souplesse</b>.</li>
					<li><b>Aucun téléchargement</b> ni installation particulière n\'est nécessaire, il suffit d\'avoir une connexion à Internet.</li>
					<li>TWCC est <b>compatible</b> avec la majorité des environnements (Mac, Linux, Windows...). '.W3C_HTML.' Testé pour:
						<ul><li>MS Internet Explorer 6, 7 et 8</li>
						<li>Mozilla FireFox 3</li>
						<li>Safari 4 et 5</li>
						<li>Opera 10</li>
						<li>Google Chrome 5</li>
						<li>Chromium 4 à 6</li></ul></li>
					<li>TWCC est <b>entièrement GRATUIT</b> et sous la licence CC BY-NC: '.APPLICATION_LICENSE.'</li></ul>
					<p>TWCC a été créé par <a href="" class="contact" title="'.CONTACT_US.'">Clément Ronzon</a> suite aux travaux de recherche et de
					développement effectués pour <a href="http://www.grottocenter.org/" target="_blank">GrottoCenter.org</a>.</p>
					<p>Merci à : Roland Aigner, Alessandro Avaro, Leszek Pawlowicz, Lê Viết Thanh.</p>
					<p>Pour toute question ou suggestion n\'hésitez pas à <b>nous contacter</b>.</p>
					<p>Vous pouvez <b>soutenir cette initiative</b> en effectuant un don.</p>');

define('PROJECTION', 'Projection :');
define('UNITS', 'Unités :');
define('DATUM', 'Datum :');
define('NAME', 'Nom :');
define('NAD_GRIDS', 'Grilles NAD :');
define('ELLIPSOID', 'Ellipsoïde :');
define('SEMIMAJOR_RADIUS', 'Demi-grand axe :');
define('SEMIMINOR_RADIUS', 'Demi-petit axe :');
define('INVERSE_FLATTENING', 'Aplatissement inverse :');
define('CENTRAL_LATITUDE', 'Latitude centrale :');
define('STANDARD_PARALLEL_1', 'Standard parallèle 1 :');
define('STANDARD_PARALLEL_2', 'Standard parallèle 2 :');
define('USED_IN_MERC_AND_EQC', 'Utilisé avec merc et eqc :');
define('CENTRAL_LONGITUDE', 'Longitude centrale :');
define('FOR_SOMERC_PROJECTION', 'Pour la projection somerc :');
define('FALSE_EASTING', 'Abscisse fictive :');
define('FALSE_NORTHING', 'Ordonnée fictive :');
define('PROJECTION_SCALE_FACTOR', 'Facteur d\'échelle de projection :');
define('SPHERE_AREA_OF_ELLIPSOID', 'Sphère - aire de l\'ellipsoïde :');
define('TOWARD_WGS84_SCALING', 'Mise à l\'échelle WGS84 :');
define('CARTESIAN_SCALING', 'Mise à l\'échelle cartésienne :');
define('FROM_GREENWICH_SCALING', 'Mise à l\'échelle Greenwich :');

define('COORDINATE_REFERENCE_SYSTEMS', 'Systèmes de référence');

define('DIRECT_LINK', 'Lien direct');

define('ERROR_CONTACT_US', 'Erreur n°%s. Veuillez nous contacter svp.');

define('POLL', 'Sondage satisfaction utilisateur');
define('S_POLL', 'Sondage');
define('RATE', 'Voter');
define('PLEASE_TAKE_A_MOMENT', 'Enquête, seconde partie.');
define('AVERAGE_RATING', 'Moy. : %s</span> pour <span class="reviewcount"> %s votes');
define('ITEM_NAME_1', 'Revenez-vous souvent sur TWCC ?');
define('ITEM_LABELS_1', 'Première fois|1 fois par semestre|1 fois par trimestre|1 fois par mois|Toutes les semaines');
define('ITEM_NAME_2', 'Veuillez evaluez TWCC');
define('ITEM_LABELS_2', 'Mauvais|Moyen|Bon|Très bon|Excellent');
define('ITEM_NAME_3', 'Souhaiteriez-vous une version mobile de TWCC ?');
define('ITEM_LABELS_3', 'Aucun intérêt|Pourquoi pas|Ce serait cool|Oui|Oui vraiment');
define('ITEM_NAME_4', 'Combien seriez-vous prêt à payer pour bénéficier de TWCC sur votre téléphone mobile ?');
define('ITEM_LABELS_4', '&lt;1€|de 1€ à 5€|de 5€ à 10€|de 10€ à 50€|&gt;50€');
define('ITEM_NAME_5', 'Quel type de téléphone mobile utilisez-vous ?');
define('ITEM_LABELS_5', 'Autre|Windows Mobile|Blackberry|Android|iPhone');
define('RATER_ERROR_MAX', 'Vous avez déjà évalué cet item. Vous êtes autorisé à voter %s fois.');
define('RATER_ERROR_EMPTY', 'Vous n\'avez pas choisi de valeur.');
define('RATER_THANKS', 'Merci pour votre vote.');
define('THIS_ITEM', 'cet item');
define('LEAVE_A_COMMENT', 'Laisser un commentaire...');
define('POLL_COMMENTS', 'Le résultat de la première enquête montre que la majorité des utilisateurs de TWCC désireraient en avoir une version sur leur téléphone mobile. Veuillez prendre 5 secondes pour répondre à ce nouveau questionnaire.');

define('LENGTH', 'Longueur :');
define('AREA', 'Aire :');
define('MAGNETIC_DECLINATION', 'Déclinaison Magnétique');

define('FACEBOOK', 'TWCC sur Facebook');

define('LOGOUT', 'Déconnexion');
define('LOG_IN', 'Connexion');
define('SIGN_UP', 'M\'inscrire');
define('MY_ACCOUNT', 'Mon compte');

define('ALL_FIELDS_REQUIRED', 'All form fields are required.');
define('REG_NAME', 'Name');
define('REG_EMAIL', 'Email');
define('REG_PASSWORD', 'Password');
define('CHECK_NAME', 'Username may consist of a-z, 0-9, underscores, whitespaces, begin with a letter.');
define('CHECK_EMAIL', 'eg. my.name@gmail.com');
define('CHECK_PASSWORD', 'Password field only allow : a-z 0-9');
define('CHECK_LENGTH', 'Length of %n must be between %min and %max.');
define('CHECK_UNICITY', 'A user with this email already exists.');

define('LOG_EMAIL', 'Email');
define('LOG_PASSWORD', 'Password');
?>