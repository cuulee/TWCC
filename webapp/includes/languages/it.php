<?php
/*

	Copyright Clément Ronzon
	Translated to Italian by Alessandro Avaro - ale_avaro@libero.it

*/

define('LOCALE', 'it_IT');
define('PAYPAL_LOCALE', 'it_IT');
@setlocale(LC_TIME, LOCALE.'.UTF8', 'ita');
if (preg_match('%windows%i', $_SERVER['SystemRoot']) || preg_match('%winnt%i', $_SERVER['SystemRoot'])) @setlocale(LC_TIME, 'italian'); // Page de code pour serveur sous Windows (installation locale)
define('DATE_FORMAT_LONG', '%A %d %B, %Y');

define('APPLICATION_TITLE', 'The World Coordinate Converter');
define('APPLICATION_TITLE_BIS', '<sup>*</sup>');
define('APPLICATION_TITLE_TER', '*Il convertitore mondiale di coordinate');
define('TRANSLATE', 'Convertire');
define('APPLICATION_DESCRIPTION', 'TWCC, Il World Coordinate Converter è un tool ideato per convertire coordinate geodetiche in svariati sistemi di riferimento.');
define('LANGUAGE_CODE', 'it');
define('APPLICATION_LICENSE', '<a href="http://creativecommons.org/licenses/by-nc/3.0/deed.'.LANGUAGE_CODE.'" target="_blank" title="CC BY-NC"><img src="http://i.creativecommons.org/l/by-nc/3.0/80x15.png" alt="CC BY-NC" style="border:0 none;"></a>');

define('WORLD', 'Mondo');
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
define('LABEL_ZONE', 'Zona = ');
define('LABEL_HEMI', 'Emisfero = ');
define('LABEL_CONVERGENCE', 'Convergenza = ');
define('LABEL_CSV', 'CSV:');
define('LABEL_FORMAT', 'Formato:');
define('OPTION_E', 'E');
define('OPTION_W', 'O');
define('OPTION_N', 'N');
define('OPTION_S', 'S');
define('OPTION_DMS', 'Gra. min. sec. ');
define('OPTION_DD', 'Gra. Decimali');
define('OPTION_NORTH', 'Nord');
define('OPTION_SOUTH', 'Sud');
define('OPTION_CSV', 'CSV');
define('OPTION_MANUAL', 'Manuale');
define('OPTION_M', 'Metri ');
define('OPTION_KM', 'Chilometri');

define('TAB_TITLE_1', 'Direzione');
define('TAB_TITLE_2', 'Informazioni aggiuntive');
define('DRAG_ME', 'Trascinami!');
define('NEW_SYSTEM_ADDED', 'Il nuovo sistema è stato aggiunto, è possibile trovarlo sotto il nome di ');
define('CRS_ALREADY_EXISTS', 'Il sistema che si tenta di aggiungere è già presente in TWCC. E possibile trovarlo nei menù a discesa in: ');
define('ELEVATION', 'Quota:');
define('ADDRESS', 'Indirizzo:');
define('ZOOM', 'Zoom');
define('NO_ADDR_FOUND', 'Indirizzo non trovato.');
define('GEOCODER_FAILED', 'Geocode non è andato a buon fine a causa di: ');

define('CREDIT', 'Credit:');
define('HOSTING', 'Hosting:');
define('CONSTANTS', 'Costanti:');
define('LIBRARIES', 'Librerie:');
define('MAPS', 'Mappe:');
define('GO', 'Vai!');
define('SEARCH_BY_ADDRESS', 'Ricerca per indirizzo:');
define('HOME', 'Home');
define('ABOUT', 'About TWCC');
define('CONTACT_US', 'Contattaci');
define('DONATE', 'Fai una donazione');
define('WE_NEED_YOU','Abbiamo bisogno del tuo aiuto!');
define('SUPPORT_TEXT','Ci affidiamo al generoso contributo degli utenti di TWCC per continuare a gestire e migliorare questo sito gratuitamente.<br>Il vostro contributo può fare la differenza.');
define('HOW_WE_PLAN','Come intendiamo utilizzare i fondi:<br><ul>
<li>Progettazione di un\'interfaccia per dispositivi mobile, smartphones e tablets.</li>
<li><span style="color:#808080">Noleggio di un nuovo server per fornire un servizio migliore e più veloce.</span></li>
</ul>');
define('LAST_5_DONORS','Grazie a chi ha donato!<br>Lista degli ultimi cinque donatori:');
define('CHANGELOG', 'Changelog');
define('SELECT_YOUR_LANGUAGE', 'Lingua: ');

define('HELP', 'Aiuto');
define('CLOSE', 'Chiudi');
define('HELP_1', 'Selezionare il sistema di riferimento di partenza.');
define('HELP_2', 'Selezionare il sistema di riferimento finale.');
define('HELP_3', 'Inserire le coordinate.</p>
								<div><b>OR</b></div>
								<p>Click on the map.</p>
								<div><b>OR</b></div>
								<p>Drag and drop the marker.</p>
								<div><b>OR</b></div>
								<p>Enter an address in the top search bar.');
define('HELP_4', 'Cliccare per effettuare la conversione.');
define('PREVIOUS', 'Precedente');
define('NEXT', 'Prossimo');
define('FINISH', 'Fatto!');
define('LOADING', 'In caricamento, attendere...');
define('YOU_CANT_FIND', 'Il sistema di coordinate è stato trovato?');
define('UNDEFINED_TITLE', 'Titolo non definito');
define('CONVERT', 'Converti');
define('SYSTEM_DEFINITION', 'Definizione del sistema di coordinate');

define('OPTIONS', 'Options:');
define('MODE', 'Modo:');
define('CONVENTION_TITLE', 'Convenzione');
define('CONVENTION', CONVENTION_TITLE.' <a href="" title="'.HELP.'" class="convention">[?]</a>:');
define('SURVEY', 'Survey');
define('GAUSS_BOMFORD', 'Gauss-Bomford');
define('AUTO_ZOOM', 'Zoom automatico:');
define('PRINT_CURRENT_MAP', 'Stampa la mappa:');

define('CUSTOM_SYSTEM', 'Sistema di riferimento custom');
define('SEARCH_SYSTEM', 'Search the <span class="underlined"><a href="'.DIR_WS_IMAGES.'snippet_proj4js_format.png" class="snippet">Proj4js</a></span> format on <span class="underlined">Spatial Reference</span>:');
define('SEARCH_EXAMPLE', 'Ex: European Datum 1950');
define('SEARCH', 'Trova!');
define('COME_BACK', '<span class="underlined">Torna indietro</span> e aggiungi il nuovo sistema di riferimento in <span class="underlined">TWCC</span>:');
define('SYSTEM_EXAMPLE', '<a href="" class="toggle-next">Examples...</a>
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
define('ADD', 'Add!');
define('FREQUENT_USE', 'Utilizzi frequentemente questo sistema di riferimento?<br>Contattaci e lo aggiungeremo nel TWCC!');

define('DO_RESEARCH', 'Ricerca');
define('CLOSE_ON_SELECT', 'Chiusura');
define('RESEARCH', 'Ricerca avanzata');
define('RESEARCH_FORM', 'Maschera di ricerca');
define('CRS_CODE', 'Codice');
define('CRS_NAME', 'Nome (usare il carattere % come jolly)');
define('CRS_COUNTRY', 'Paese');
define('OPTN_ALL', 'Tutti');
define('RESULT', 'Risultati della ricerca');
define('RESULT_EMPTY', 'La sua ricerca non ha dato risultati');
define('RESULT_FIRST', 'Immettere almeno un criterio di ricerca, quindi cliccare ');

define('PLEASE_FILL_FORM', 'Compila il modulo sottostante.');
define('EMAIL', 'E-mail:');
define('MESSAGE', 'Messaggio:');
define('SEND_MESSAGE', 'Invia');
define('MESSAGE_SENT', "Grazie!\\n\\rMessaggio inviato.\\n\\rCi occuperemo della tua richiesta appena possibile.");
define('MESSAGE_NOT_SENT', 'Non è stato possibile inviare il tuo messaggio.\\n\\rSi prega di riprovare.\\n\\rErr. code ');
define('MESSAGE_WRONG_EMAIL', 'L\'indirizzo email non è corretto.\\n\\r,Si prega di riprovare.');

define('W3C_HTML', '<a href="http://validator.w3.org/check?uri=referer" title="W3C XHTML 1.0 compliant" target="_blank"><img src="http://www.w3.org/Icons/valid-xhtml10-blue.png" alt="W3C XHTML 1.0 compliant" style="border:0px none;height:15px;"></a>');
define('ABOUT_CONTENT', '<h2>What is TWCC?</h2>
					<p>TWCC, "The World Coordinate Converter", is a tool to convert geodetic coordinates in a wide range
					of reference systems.</p>
					<p>Several coordinate conversion tools already exist, however, here is what makes the strength of TWCC:</p>
					<ul><li>This tool is <b>intuitive and easy</b> to use.</li>
					<li>The possibility to add user-defined systems and the use of an interactive map make it <b>flexible</b>.</li>
					<li><b>No download</b> or special installation is required, you just need to have an Internet connection.</li>
					<li>TWCC is <b>compatible</b> with most environments (Mac, Linux, Windows...). '.W3C_HTML.' Tested for:
						<ul><li>MS Internet Explorer 6, 7 and 8</li>
						<li>Mozilla FireFox 3</li>
						<li>Safari 4 and 5</li>
						<li>Opera 10</li>
						<li>Google Chrome 5</li>
						<li>Chromium 4 to 6</li></ul></li>
					<li>TWCC is <b>completely FREE</b> and licensed under CC BY-NC: '.APPLICATION_LICENSE.'</li></ul>
					<p>TWCC was created by <a href="" class="contact" title="'.CONTACT_US.'">Clément Ronzon</a> following research and
					development carried out for <a href="http://www.grottocenter.org/" target="_blank">GrottoCenter.org</a>.</p>
					<p>Special thanks to: Roland Aigner, Alessandro Avaro, Leszek Pawlowicz, Lê Vi?t Thanh.</p>
					<p>For any questions or suggestions please <b>contact us</b>.</p>
					<p>You can donate to <b>support this initiative</b>.</p>');

define('PROJECTION', 'Proiezione:');
define('UNITS', 'Unità:');
define('DATUM', 'Datum:');
define('NAME', 'Nome:');
define('NAD_GRIDS', 'NAD Grids:');
define('ELLIPSOID', 'Ellissoide:');
define('SEMIMAJOR_RADIUS', 'Raggio semiasse maggiore:');
define('SEMIMINOR_RADIUS', 'Raggio semiasse minore:');
define('INVERSE_FLATTENING', 'Schiacciamento:');
define('CENTRAL_LATITUDE', 'Latitudine centrale:');
define('STANDARD_PARALLEL_1', 'Parallelo di riferimento 1:');
define('STANDARD_PARALLEL_2', 'Parallelo di riferimento 2:');
define('USED_IN_MERC_AND_EQC', 'Usato in merc and eqc:');
define('CENTRAL_LONGITUDE', 'Longitudine centrale:');
define('FOR_SOMERC_PROJECTION', 'Per proiezione somerc:');
define('FALSE_EASTING', 'Falso Est:');
define('FALSE_NORTHING', 'Falso Nord:');
define('PROJECTION_SCALE_FACTOR', 'Fattore di scala:');
define('SPHERE_AREA_OF_ELLIPSOID', 'Sfera - area dell\'ellissoide:');
define('TOWARD_WGS84_SCALING', 'Toward WGS84 scaling:');
define('CARTESIAN_SCALING', 'Cartesian scaling:');
define('FROM_GREENWICH_SCALING', 'From Greenwich scaling:');

define('COORDINATE_REFERENCE_SYSTEMS', 'Sistema di riferimento');

define('DIRECT_LINK', 'Link diretto');

define('ERROR_CONTACT_US', 'Errore #%s. Si prega di contattarci.');

define('POLL', 'Questionario di soddisfazione dell\'utente');
define('S_POLL', 'Questionario');
define('RATE', 'Rate');
define('PLEASE_TAKE_A_MOMENT', 'Questionario, seconda parte.');
define('AVERAGE_RATING', 'Ave. rating: %s</span> from <span class="reviewcount"> %s votes');
define('ITEM_NAME_1', 'Torni spesso su?');
define('ITEM_LABELS_1', 'Prima volta|Ogni sei mesi|Ogni 4 mesi|1 volta al mese|Ogni settimana');
define('ITEM_NAME_2', 'Dai una valutazione a TWCC');
define('ITEM_LABELS_2', 'Insufficiente|Sufficiente|Buono|Ottimo|Eccellente');
define('ITEM_NAME_3', 'Pensi che sarebbe utile una versione mobile di TWCC?');
define('ITEM_LABELS_3', 'Nessun interesse|Perchè no|Sarebbe interessante|Si|Assolutamente si');
define('ITEM_NAME_4', 'Quanto saresti disposto a pagare per avere una versione mobile di TWCC sul tuo telefono?');
define('ITEM_LABELS_4', '&meno di;$1|da $1 a $5|da $5 a $10|da $10 a $50|&più di;$50');
define('ITEM_NAME_5', 'Che tipo di telefono utilizzi?');
define('ITEM_LABELS_5', 'Altro|Windows mobile|Blackberry|Android|iPhone');
define('RATER_ERROR_MAX', 'Hai già espresso una valutazione. You were allowed %s vote(s).');
define('RATER_ERROR_EMPTY', 'Non hai selezonato nessuna valutazione.');
define('RATER_THANKS', 'Grazie per aver votato.');
define('THIS_ITEM', 'questo indirizzo');
define('LEAVE_A_COMMENT', 'Lascia un commento...');
define('POLL_COMMENTS', 'Il risultato del primo sondaggio mostra che la maggior parte degli utenti di TWCC gradirebbero una versione mobile sul proprio telefono. Dedica cortesemente altri 5 minuti al prossimo sondaggio.');

define('LENGTH', 'Lunghezza:');
define('AREA', 'Area:');
define('MAGNETIC_DECLINATION', 'Declinazione Magnetica');

define('FACEBOOK', 'TWCC è su Facebook');
?>