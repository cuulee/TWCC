INSERT INTO `coordinate_systems` (`Locked`, `Id_author`, `Id_reviewer`, `Id_locker`, `Date_inscription`, `Date_reviewed`, `Date_locked`, `Code`, `Definition`, `Bounds`, `Url`, `Enabled`, `Is_connector`) VALUES
('NO', 1, NULL, NULL, NOW(), NULL, NULL, 'EPSG:5343', '+title=POSGAR 2007 / Argentina 1 +proj=tmerc +lat_0=-90 +lon_0=-72 +k=1 +x_0=1500000 +y_0=0 +ellps=GRS80 +towgs84=0,0,0,0,0,0,0 +units=m +no_defs', NULL, 'http://spatialreference.org/ref/epsg/5343/', 'YES', 'NO'),
('NO', 1, NULL, NULL, NOW(), NULL, NULL, 'EPSG:5344', '+title=POSGAR 2007 / Argentina 2 +proj=tmerc +lat_0=-90 +lon_0=-69 +k=1 +x_0=2500000 +y_0=0 +ellps=GRS80 +towgs84=0,0,0,0,0,0,0 +units=m +no_defs', NULL, 'http://spatialreference.org/ref/epsg/5344/', 'YES', 'NO'),
('NO', 1, NULL, NULL, NOW(), NULL, NULL, 'EPSG:5345', '+title=POSGAR 2007 / Argentina 3 +proj=tmerc +lat_0=-90 +lon_0=-66 +k=1 +x_0=3500000 +y_0=0 +ellps=GRS80 +towgs84=0,0,0,0,0,0,0 +units=m +no_defs', NULL, 'http://spatialreference.org/ref/epsg/5345/', 'YES', 'NO'),
('NO', 1, NULL, NULL, NOW(), NULL, NULL, 'EPSG:5346', '+title=POSGAR 2007 / Argentina 4 +proj=tmerc +lat_0=-90 +lon_0=-63 +k=1 +x_0=4500000 +y_0=0 +ellps=GRS80 +towgs84=0,0,0,0,0,0,0 +units=m +no_defs', NULL, 'http://spatialreference.org/ref/epsg/5346/', 'YES', 'NO'),
('NO', 1, NULL, NULL, NOW(), NULL, NULL, 'EPSG:5347', '+title=POSGAR 2007 / Argentina 5 +proj=tmerc +lat_0=-90 +lon_0=-60 +k=1 +x_0=5500000 +y_0=0 +ellps=GRS80 +towgs84=0,0,0,0,0,0,0 +units=m +no_defs', NULL, 'http://spatialreference.org/ref/epsg/5347/', 'YES', 'NO'),
('NO', 1, NULL, NULL, NOW(), NULL, NULL, 'EPSG:5348', '+title=POSGAR 2007 / Argentina 6 +proj=tmerc +lat_0=-90 +lon_0=-57 +k=1 +x_0=6500000 +y_0=0 +ellps=GRS80 +towgs84=0,0,0,0,0,0,0 +units=m +no_defs', NULL, 'http://spatialreference.org/ref/epsg/5348/', 'YES', 'NO'),
('NO', 1, NULL, NULL, NOW(), NULL, NULL, 'EPSG:5349', '+title=POSGAR 2007 / Argentina 7 +proj=tmerc +lat_0=-90 +lon_0=-54 +k=1 +x_0=7500000 +y_0=0 +ellps=GRS80 +towgs84=0,0,0,0,0,0,0 +units=m +no_defs', NULL, 'http://spatialreference.org/ref/epsg/5349/', 'YES', 'NO');

INSERT INTO `country_coordinate_system` (`Iso_countries`, `Id_coordinate_systems`) VALUES
('AR', 341),
('AR', 342),
('AR', 343),
('AR', 344),
('AR', 345),
('AR', 346),
('AR', 347);

UPDATE `coordinate_systems` SET `Definition` = '+title=Stereo 70 (deprecated) +proj=sterea +lat_0=46 +lon_0=25 +k=0.99975 +x_0=500000 +y_0=500000 +ellps=krass +units=m +no_defs' WHERE `Id_coordinate_systems` = 118;

INSERT INTO `coordinate_systems` (`Locked`, `Id_author`, `Id_reviewer`, `Id_locker`, `Date_inscription`, `Date_reviewed`, `Date_locked`, `Code`, `Definition`, `Bounds`, `Url`, `Enabled`, `Is_connector`) VALUES
('NO', 1, NULL, NULL, NOW(), NULL, NULL, 'EPSG:3844', '+title=Stereo 70 +proj=sterea +lat_0=46 +lon_0=25 +k=0.99975 +x_0=500000 +y_0=500000 +ellps=krass +towgs84=33.4,-146.6,-76.3,-0.359,-0.053,0.844,-0.84 +units=m +no_defs', NULL, 'http://spatialreference.org/ref/epsg//', 'YES', 'NO');

INSERT INTO `country_coordinate_system` (`Iso_countries`, `Id_coordinate_systems`) VALUES
('RO', 390);

INSERT INTO `coordinate_systems` (`Locked`, `Id_author`, `Id_reviewer`, `Id_locker`, `Date_inscription`, `Date_reviewed`, `Date_locked`, `Code`, `Definition`, `Bounds`, `Url`, `Enabled`, `Is_connector`) VALUES
('NO', 1, NULL, NULL, NOW(), NULL, NULL, 'SR-ORG:4715', '+title=Merchich / Lambert Zone 3 +proj=lcc +lat_1=33.3 +lat_0=26.1 +lon_0=-5.4 +k_0=0.999616304 +x_0=1200000 +y_0=400000 +a=6378249.2 +b=6356515 +towgs84=31,146,47,0,0,0,0 +units=m +no_defs', NULL, 'http://spatialreference.org/ref/sr-org/4715/', 'YES', 'NO'),
('NO', 1, NULL, NULL, NOW(), NULL, NULL, 'SR-ORG:4716', '+title=Merchich / Lambert Zone 4 +proj=lcc +lat_1=33.3 +lat_0=22.5 +lon_0=-5.4 +k_0=0.999616437 +x_0=1500000 +y_0=400000 +a=6378249.2 +b=6356515 +towgs84=31,146,47,0,0,0,0 +units=m +no_defs', NULL, 'http://spatialreference.org/ref/sr-org/4716/', 'YES', 'NO');

INSERT INTO `country_coordinate_system` (`Iso_countries`, `Id_coordinate_systems`) VALUES
('MA', 391),
('MA', 392);

UPDATE `coordinate_systems` SET `Date_reviewed` = NOW(), `Id_reviewer` = 1, `Definition` = '+title=Campo Inchauspe 5 +proj=tmerc +lat_0=-90 +lon_0=-60 +k=1 +x_0=5500000 +y_0=0 +ellps=intl +units=m +no_defs +towgs84=-148,136,90' WHERE `Code` = 'EPSG:22195';
