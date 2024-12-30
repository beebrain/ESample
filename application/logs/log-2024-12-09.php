<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2024-12-09 09:08:06 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:08:07 --> No URI present. Default controller set.
DEBUG - 2024-12-09 09:08:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:08:08 --> Total execution time: 2.5481
DEBUG - 2024-12-09 09:08:12 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:08:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:08:12 --> Total execution time: 0.2109
DEBUG - 2024-12-09 09:08:14 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:08:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:08:14 --> Total execution time: 0.1801
DEBUG - 2024-12-09 09:08:15 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:08:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:08:15 --> Total execution time: 0.2101
DEBUG - 2024-12-09 09:08:19 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:08:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:08:19 --> Total execution time: 0.1492
DEBUG - 2024-12-09 09:08:19 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:08:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:08:20 --> Total execution time: 0.0531
DEBUG - 2024-12-09 09:08:20 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:08:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:08:20 --> Total execution time: 0.1107
DEBUG - 2024-12-09 09:08:23 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:08:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:08:24 --> Total execution time: 0.1063
DEBUG - 2024-12-09 09:08:24 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:08:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:08:24 --> Total execution time: 0.0748
DEBUG - 2024-12-09 09:08:25 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:08:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:08:25 --> Total execution time: 0.0547
DEBUG - 2024-12-09 09:08:28 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:08:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:08:29 --> Total execution time: 0.1273
DEBUG - 2024-12-09 09:08:29 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:08:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:08:29 --> Total execution time: 0.0609
DEBUG - 2024-12-09 09:08:30 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:08:30 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:08:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:08:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:08:30 --> Total execution time: 0.0587
DEBUG - 2024-12-09 09:08:30 --> SELECT *
FROM `es_user`
WHERE `active` = '1'
DEBUG - 2024-12-09 09:08:30 --> Total execution time: 0.4853
DEBUG - 2024-12-09 09:08:31 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:08:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:08:31 --> SELECT `es_sampletestservice`.*, `es_sampletest`.`sampleid`, `es_sampletest`.`samplename`, `es_sampletest`.`textpack`, `es_sampletest`.`totalprice`, `es_service`.`service`, `es_service`.`method`, `es_service`.`price`
FROM `es_sampletest`
INNER JOIN `es_sampletestservice` ON `es_sampletest`.`sampleid` = `es_sampletestservice`.`sampleid`
INNER JOIN `es_service` ON `es_sampletestservice`.`serviceid` = `es_service`.`id`
WHERE `es_sampletest`.`sampleid` = '69'
DEBUG - 2024-12-09 09:08:31 --> Total execution time: 0.0439
DEBUG - 2024-12-09 09:08:32 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:08:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:08:32 --> SELECT *
FROM `es_testapp`
WHERE `testid` = '54'
DEBUG - 2024-12-09 09:08:32 --> Total execution time: 0.0372
DEBUG - 2024-12-09 09:08:32 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:08:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:08:33 --> SELECT *
FROM `es_user`
WHERE `active` = '1'
DEBUG - 2024-12-09 09:08:33 --> Total execution time: 0.0707
DEBUG - 2024-12-09 09:08:49 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:08:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:08:49 --> Total execution time: 0.0954
DEBUG - 2024-12-09 09:08:50 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:08:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:08:50 --> Total execution time: 0.0788
DEBUG - 2024-12-09 09:08:50 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:08:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:08:50 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-09 09:08:50 --> Total execution time: 0.0969
DEBUG - 2024-12-09 09:09:52 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:09:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:09:52 --> Total execution time: 0.1401
DEBUG - 2024-12-09 09:09:53 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:09:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:09:53 --> Total execution time: 0.0471
DEBUG - 2024-12-09 09:09:54 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:09:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:09:54 --> Total execution time: 0.0315
DEBUG - 2024-12-09 09:10:01 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:10:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:10:01 --> Total execution time: 0.0564
DEBUG - 2024-12-09 09:10:02 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:10:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:10:02 --> Total execution time: 0.0498
DEBUG - 2024-12-09 09:10:03 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:10:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:10:03 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-09 09:10:03 --> Total execution time: 0.0628
DEBUG - 2024-12-09 09:10:46 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:10:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:10:46 --> Total execution time: 0.0499
DEBUG - 2024-12-09 09:10:47 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:10:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:10:47 --> Total execution time: 0.0564
DEBUG - 2024-12-09 09:10:48 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:10:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:10:48 --> Total execution time: 0.0621
DEBUG - 2024-12-09 09:10:54 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:10:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:10:54 --> Total execution time: 0.0353
DEBUG - 2024-12-09 09:10:54 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:10:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:10:54 --> Total execution time: 0.0407
DEBUG - 2024-12-09 09:10:55 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:10:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:10:55 --> Total execution time: 0.0740
DEBUG - 2024-12-09 09:10:57 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:10:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:10:57 --> Total execution time: 0.0373
DEBUG - 2024-12-09 09:10:58 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:10:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:10:58 --> Total execution time: 0.0551
DEBUG - 2024-12-09 09:10:59 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:10:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:10:59 --> Total execution time: 0.0766
DEBUG - 2024-12-09 09:11:03 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:11:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:11:03 --> Total execution time: 0.0594
DEBUG - 2024-12-09 09:11:08 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:11:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:11:09 --> Total execution time: 0.0556
DEBUG - 2024-12-09 09:11:09 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:11:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:11:09 --> Total execution time: 0.0466
DEBUG - 2024-12-09 09:11:10 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:11:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:11:10 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-09 09:11:10 --> Total execution time: 0.0760
DEBUG - 2024-12-09 09:11:14 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:11:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:11:14 --> Total execution time: 0.0431
DEBUG - 2024-12-09 09:11:15 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:11:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:11:15 --> Total execution time: 0.0611
DEBUG - 2024-12-09 09:11:15 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:11:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:11:15 --> Total execution time: 0.0484
DEBUG - 2024-12-09 09:11:18 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:11:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:11:18 --> Total execution time: 0.0479
DEBUG - 2024-12-09 09:11:19 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:11:19 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:11:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:11:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:11:19 --> SELECT *
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
WHERE `sampleid` = '69'
DEBUG - 2024-12-09 09:11:19 --> Total execution time: 0.0361
DEBUG - 2024-12-09 09:11:19 --> SELECT *
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
WHERE `sampleid` = '70'
DEBUG - 2024-12-09 09:11:19 --> Total execution time: 0.4535
DEBUG - 2024-12-09 09:11:59 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:11:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:11:59 --> Total execution time: 0.1541
DEBUG - 2024-12-09 09:12:01 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:12:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:12:01 --> SELECT *
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
WHERE `sampleid` = '69'
DEBUG - 2024-12-09 09:12:01 --> Total execution time: 0.0507
DEBUG - 2024-12-09 09:12:04 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:12:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:12:04 --> Total execution time: 0.0313
DEBUG - 2024-12-09 09:12:05 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:12:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:12:05 --> Total execution time: 0.0762
DEBUG - 2024-12-09 09:12:06 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:12:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:12:06 --> Total execution time: 0.0498
DEBUG - 2024-12-09 09:12:08 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:12:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:12:08 --> Total execution time: 0.0553
DEBUG - 2024-12-09 09:12:09 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:12:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:12:09 --> Total execution time: 0.0805
DEBUG - 2024-12-09 09:12:09 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:12:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:12:09 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-09 09:12:09 --> Total execution time: 0.0733
DEBUG - 2024-12-09 09:12:13 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:12:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:12:13 --> Total execution time: 0.0495
DEBUG - 2024-12-09 09:12:14 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:12:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:12:14 --> Total execution time: 0.0556
DEBUG - 2024-12-09 09:12:15 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:12:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:12:15 --> Total execution time: 0.0527
DEBUG - 2024-12-09 09:12:17 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:12:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:12:17 --> Total execution time: 0.0542
DEBUG - 2024-12-09 09:12:18 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:12:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:12:18 --> Total execution time: 0.0605
DEBUG - 2024-12-09 09:12:18 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:12:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:12:18 --> Total execution time: 0.0473
DEBUG - 2024-12-09 09:12:38 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:12:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:12:38 --> Total execution time: 0.0498
DEBUG - 2024-12-09 09:12:39 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:12:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:12:39 --> Total execution time: 0.0548
DEBUG - 2024-12-09 09:12:40 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:12:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:12:40 --> Total execution time: 0.0546
DEBUG - 2024-12-09 09:13:28 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:13:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:13:28 --> Total execution time: 0.0547
DEBUG - 2024-12-09 09:13:29 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:13:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:13:29 --> Total execution time: 0.0794
DEBUG - 2024-12-09 09:13:30 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:13:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:13:30 --> Total execution time: 0.0587
DEBUG - 2024-12-09 09:13:45 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:13:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:13:45 --> Total execution time: 0.1460
DEBUG - 2024-12-09 09:13:46 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:13:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:13:46 --> Total execution time: 0.0575
DEBUG - 2024-12-09 09:13:47 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:13:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:13:47 --> Total execution time: 0.0629
DEBUG - 2024-12-09 09:14:50 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:14:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:14:50 --> Total execution time: 0.1156
DEBUG - 2024-12-09 09:14:51 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:14:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:14:51 --> Total execution time: 0.0624
DEBUG - 2024-12-09 09:14:52 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:14:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:14:52 --> Total execution time: 0.0526
DEBUG - 2024-12-09 09:14:54 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:14:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:14:54 --> Total execution time: 0.0536
DEBUG - 2024-12-09 09:14:59 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:14:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:14:59 --> Total execution time: 0.0571
DEBUG - 2024-12-09 09:15:03 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:15:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:15:03 --> Total execution time: 0.0726
DEBUG - 2024-12-09 09:15:04 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:15:04 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:15:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:15:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:15:04 --> SELECT *
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
WHERE `sampleid` = '70'
DEBUG - 2024-12-09 09:15:04 --> Total execution time: 0.0258
DEBUG - 2024-12-09 09:15:05 --> SELECT *
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
WHERE `sampleid` = '69'
DEBUG - 2024-12-09 09:15:05 --> Total execution time: 0.4384
DEBUG - 2024-12-09 09:15:33 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:15:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:15:33 --> Total execution time: 0.1558
DEBUG - 2024-12-09 09:15:34 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:15:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:15:34 --> Total execution time: 0.0751
DEBUG - 2024-12-09 09:15:35 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:15:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:15:35 --> Total execution time: 0.0775
DEBUG - 2024-12-09 09:18:35 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:18:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:18:35 --> Total execution time: 0.0808
DEBUG - 2024-12-09 09:18:37 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:18:37 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:18:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:18:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:18:37 --> Total execution time: 0.0361
DEBUG - 2024-12-09 09:18:37 --> Total execution time: 0.4669
DEBUG - 2024-12-09 09:18:40 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:18:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:18:40 --> Total execution time: 0.0590
DEBUG - 2024-12-09 09:18:41 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:18:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:18:41 --> SELECT *
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
WHERE `sampleid` = '69'
DEBUG - 2024-12-09 09:18:41 --> Total execution time: 0.0375
DEBUG - 2024-12-09 09:18:43 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:18:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:18:43 --> SELECT *
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
WHERE `sampleid` = '70'
DEBUG - 2024-12-09 09:18:43 --> Total execution time: 0.0721
DEBUG - 2024-12-09 09:18:46 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:18:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:18:46 --> Total execution time: 0.0542
DEBUG - 2024-12-09 09:18:50 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:18:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:18:50 --> Total execution time: 0.0737
DEBUG - 2024-12-09 09:18:52 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:18:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:18:52 --> SELECT *
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
WHERE `sampleid` = '69'
DEBUG - 2024-12-09 09:18:52 --> Total execution time: 0.0359
DEBUG - 2024-12-09 09:18:53 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:18:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:18:53 --> SELECT *
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
WHERE `sampleid` = '70'
DEBUG - 2024-12-09 09:18:53 --> Total execution time: 0.0573
DEBUG - 2024-12-09 09:18:55 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:18:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:18:55 --> Total execution time: 0.0468
DEBUG - 2024-12-09 09:18:56 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:18:56 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:18:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:18:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:18:56 --> Total execution time: 0.0446
DEBUG - 2024-12-09 09:18:56 --> Total execution time: 0.4813
DEBUG - 2024-12-09 09:18:59 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:18:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:18:59 --> Total execution time: 0.0476
DEBUG - 2024-12-09 09:19:00 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:19:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:19:00 --> SELECT *
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
WHERE `sampleid` = '69'
DEBUG - 2024-12-09 09:19:00 --> Total execution time: 0.0407
DEBUG - 2024-12-09 09:19:01 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:19:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:19:01 --> SELECT *
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
WHERE `sampleid` = '70'
DEBUG - 2024-12-09 09:19:01 --> Total execution time: 0.0534
DEBUG - 2024-12-09 09:19:05 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:19:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:19:05 --> Total execution time: 0.0525
DEBUG - 2024-12-09 09:19:06 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:19:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:19:07 --> SELECT *
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
WHERE `sampleid` = '66'
DEBUG - 2024-12-09 09:19:07 --> Total execution time: 0.0564
DEBUG - 2024-12-09 09:21:43 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:21:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:21:43 --> Total execution time: 0.0425
DEBUG - 2024-12-09 09:21:44 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:21:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:21:44 --> SELECT *
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
WHERE `sampleid` = '69'
DEBUG - 2024-12-09 09:21:44 --> Total execution time: 0.0557
DEBUG - 2024-12-09 09:21:46 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:21:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:21:46 --> SELECT *
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
WHERE `sampleid` = '70'
DEBUG - 2024-12-09 09:21:46 --> Total execution time: 0.0496
DEBUG - 2024-12-09 09:22:02 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:22:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:22:02 --> Total execution time: 0.0660
DEBUG - 2024-12-09 09:22:03 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:22:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:22:04 --> SELECT *
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
WHERE `sampleid` = '69'
DEBUG - 2024-12-09 09:22:04 --> Total execution time: 0.0448
DEBUG - 2024-12-09 09:22:05 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:22:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:22:05 --> SELECT *
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
WHERE `sampleid` = '70'
DEBUG - 2024-12-09 09:22:05 --> Total execution time: 0.0790
DEBUG - 2024-12-09 09:22:11 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:22:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:22:11 --> Total execution time: 0.0450
DEBUG - 2024-12-09 09:22:13 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:22:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:22:13 --> SELECT *
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
WHERE `sampleid` = '69'
DEBUG - 2024-12-09 09:22:13 --> Total execution time: 0.0568
DEBUG - 2024-12-09 09:22:14 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:22:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:22:14 --> SELECT *
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
WHERE `sampleid` = '70'
DEBUG - 2024-12-09 09:22:14 --> Total execution time: 0.0568
DEBUG - 2024-12-09 09:25:11 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:25:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:25:11 --> Total execution time: 0.0309
DEBUG - 2024-12-09 09:25:12 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:25:12 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:25:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:25:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:25:12 --> Total execution time: 0.0680
DEBUG - 2024-12-09 09:25:13 --> Total execution time: 0.4849
DEBUG - 2024-12-09 09:25:15 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:25:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:25:15 --> Total execution time: 0.0464
DEBUG - 2024-12-09 09:25:16 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:25:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:25:16 --> SELECT *
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
WHERE `sampleid` = '69'
DEBUG - 2024-12-09 09:25:16 --> Total execution time: 0.0557
DEBUG - 2024-12-09 09:25:18 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:25:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:25:18 --> SELECT *
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
WHERE `sampleid` = '70'
DEBUG - 2024-12-09 09:25:18 --> Total execution time: 0.0562
DEBUG - 2024-12-09 09:33:37 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:33:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:33:37 --> Total execution time: 0.0574
DEBUG - 2024-12-09 09:33:38 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:33:38 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:33:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:33:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:33:39 --> Total execution time: 0.0532
DEBUG - 2024-12-09 09:33:39 --> Total execution time: 0.4727
DEBUG - 2024-12-09 09:33:41 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:33:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:33:41 --> Total execution time: 0.0416
DEBUG - 2024-12-09 09:33:42 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:33:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:33:42 --> SELECT *
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
WHERE `sampleid` = '69'
DEBUG - 2024-12-09 09:33:42 --> Total execution time: 0.0405
DEBUG - 2024-12-09 09:33:44 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:33:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:33:44 --> SELECT *
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
WHERE `sampleid` = '70'
DEBUG - 2024-12-09 09:33:44 --> Total execution time: 0.0368
DEBUG - 2024-12-09 09:34:01 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:34:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:34:01 --> Total execution time: 0.1316
DEBUG - 2024-12-09 09:34:02 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:34:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:34:02 --> Total execution time: 0.0393
DEBUG - 2024-12-09 09:34:02 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:34:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:34:02 --> Total execution time: 0.2922
DEBUG - 2024-12-09 09:34:05 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:34:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:34:05 --> Total execution time: 0.0566
DEBUG - 2024-12-09 09:34:06 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:34:06 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:34:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:34:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:34:06 --> SELECT *
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
WHERE `sampleid` = '70'
DEBUG - 2024-12-09 09:34:06 --> Total execution time: 0.0379
DEBUG - 2024-12-09 09:34:06 --> SELECT *
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
WHERE `sampleid` = '69'
DEBUG - 2024-12-09 09:34:06 --> Total execution time: 0.4517
DEBUG - 2024-12-09 09:35:28 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:35:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:35:28 --> Total execution time: 0.1266
DEBUG - 2024-12-09 09:35:29 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:35:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:35:29 --> Total execution time: 0.0468
DEBUG - 2024-12-09 09:35:30 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:35:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:35:30 --> Total execution time: 0.0291
DEBUG - 2024-12-09 09:35:32 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:35:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:35:32 --> Total execution time: 0.0424
DEBUG - 2024-12-09 09:35:33 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:35:33 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:35:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:35:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:35:33 --> SELECT *
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
WHERE `sampleid` = '69'
DEBUG - 2024-12-09 09:35:33 --> Total execution time: 0.0385
DEBUG - 2024-12-09 09:35:34 --> SELECT *
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
WHERE `sampleid` = '70'
DEBUG - 2024-12-09 09:35:34 --> Total execution time: 0.4524
DEBUG - 2024-12-09 09:36:08 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:36:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:36:08 --> Total execution time: 0.0590
DEBUG - 2024-12-09 09:36:10 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:36:10 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:36:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:36:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:36:10 --> SELECT *
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
WHERE `sampleid` = '70'
DEBUG - 2024-12-09 09:36:10 --> Total execution time: 0.0362
DEBUG - 2024-12-09 09:36:10 --> SELECT *
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
WHERE `sampleid` = '69'
DEBUG - 2024-12-09 09:36:10 --> Total execution time: 0.4510
DEBUG - 2024-12-09 09:36:18 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:36:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:36:18 --> Total execution time: 0.0441
DEBUG - 2024-12-09 09:36:19 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:36:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:36:19 --> Total execution time: 0.0599
DEBUG - 2024-12-09 09:36:19 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:36:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:36:19 --> Total execution time: 0.2380
DEBUG - 2024-12-09 09:36:44 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:36:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:36:44 --> Total execution time: 0.0405
DEBUG - 2024-12-09 09:36:45 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:36:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:36:46 --> Total execution time: 0.0632
DEBUG - 2024-12-09 09:36:46 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:36:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:36:46 --> Total execution time: 0.3333
DEBUG - 2024-12-09 09:36:48 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:36:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:36:48 --> Total execution time: 0.0566
DEBUG - 2024-12-09 09:36:49 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:36:49 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:36:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:36:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:36:49 --> SELECT *
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
WHERE `sampleid` = '69'
DEBUG - 2024-12-09 09:36:49 --> Total execution time: 0.0456
DEBUG - 2024-12-09 09:36:50 --> SELECT *
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
WHERE `sampleid` = '70'
DEBUG - 2024-12-09 09:36:50 --> Total execution time: 0.4677
DEBUG - 2024-12-09 09:37:44 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:37:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:37:45 --> Total execution time: 0.1378
DEBUG - 2024-12-09 09:37:46 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:37:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:37:46 --> Total execution time: 0.0476
DEBUG - 2024-12-09 09:37:46 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:37:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:37:46 --> Total execution time: 0.3521
DEBUG - 2024-12-09 09:37:49 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:37:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:37:49 --> Total execution time: 0.0390
DEBUG - 2024-12-09 09:37:50 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:37:50 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:37:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:37:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:37:50 --> SELECT *
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
WHERE `sampleid` = '70'
DEBUG - 2024-12-09 09:37:50 --> Total execution time: 0.0555
DEBUG - 2024-12-09 09:37:50 --> SELECT *
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
WHERE `sampleid` = '69'
DEBUG - 2024-12-09 09:37:50 --> Total execution time: 0.4681
DEBUG - 2024-12-09 09:39:52 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:39:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:39:52 --> Total execution time: 0.0515
DEBUG - 2024-12-09 09:39:53 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:39:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:39:53 --> Total execution time: 0.0548
DEBUG - 2024-12-09 09:39:54 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:39:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:39:54 --> Total execution time: 0.1938
DEBUG - 2024-12-09 09:40:03 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:40:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:40:03 --> Total execution time: 0.0222
DEBUG - 2024-12-09 09:40:04 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:40:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:40:04 --> Total execution time: 0.0547
DEBUG - 2024-12-09 09:40:05 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:40:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:40:05 --> Total execution time: 0.0452
DEBUG - 2024-12-09 09:40:12 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:40:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:40:12 --> upload file
DEBUG - 2024-12-09 09:40:12 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-12-09 09:40:12 --> Total execution time: 0.0827
DEBUG - 2024-12-09 09:40:18 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:40:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:40:18 --> Total execution time: 0.0579
DEBUG - 2024-12-09 09:40:20 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:40:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:40:20 --> SELECT *
FROM `es_testapp`
WHERE `testid` = '53'
DEBUG - 2024-12-09 09:40:20 --> Total execution time: 0.0723
DEBUG - 2024-12-09 09:40:23 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:40:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:40:23 --> Total execution time: 0.0344
DEBUG - 2024-12-09 09:40:24 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:40:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:40:24 --> Total execution time: 0.0513
DEBUG - 2024-12-09 09:40:25 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:40:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:40:25 --> Total execution time: 0.0606
DEBUG - 2024-12-09 09:41:02 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:41:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:41:02 --> Total execution time: 0.0532
DEBUG - 2024-12-09 09:41:03 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:41:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:41:03 --> Total execution time: 0.0566
DEBUG - 2024-12-09 09:41:04 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:41:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:41:04 --> Total execution time: 0.0582
DEBUG - 2024-12-09 09:41:07 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:41:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:41:07 --> Total execution time: 0.0425
DEBUG - 2024-12-09 09:41:08 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:41:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:41:08 --> Total execution time: 0.0382
DEBUG - 2024-12-09 09:41:09 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:41:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:41:09 --> Total execution time: 0.0516
DEBUG - 2024-12-09 09:41:13 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:41:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:41:13 --> Total execution time: 0.0416
DEBUG - 2024-12-09 09:41:23 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:41:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:41:23 --> upload file
DEBUG - 2024-12-09 09:41:23 --> Upload class already loaded. Second attempt ignored.
DEBUG - 2024-12-09 09:41:23 --> Total execution time: 0.0622
DEBUG - 2024-12-09 09:42:33 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:42:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:42:42 --> SELECT *
FROM `es_testapp`
WHERE `testid` = '54'
DEBUG - 2024-12-09 09:44:29 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:44:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:44:36 --> SELECT *
FROM `es_testapp`
WHERE `testid` = '54'
DEBUG - 2024-12-09 09:49:42 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:49:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:49:45 --> SELECT *
FROM `es_testapp`
WHERE `testid` = '54'
ERROR - 2024-12-09 09:49:49 --> Severity: Warning --> Undefined property: samplecontrol::$updateOperation C:\xampp\htdocs\ESample\system\core\Model.php 74
DEBUG - 2024-12-09 09:50:02 --> Total execution time: 19.8402
DEBUG - 2024-12-09 09:50:04 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:50:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:50:04 --> Total execution time: 0.0729
DEBUG - 2024-12-09 09:50:05 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:50:05 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:50:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:50:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:50:05 --> Total execution time: 0.0392
DEBUG - 2024-12-09 09:50:05 --> Total execution time: 0.0494
DEBUG - 2024-12-09 09:50:10 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:50:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:50:10 --> Total execution time: 0.0277
DEBUG - 2024-12-09 09:50:11 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:50:11 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:50:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:50:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:50:13 --> SELECT *
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
WHERE `sampleid` = '69'
DEBUG - 2024-12-09 09:50:13 --> Total execution time: 2.0636
DEBUG - 2024-12-09 09:50:13 --> SELECT *
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
WHERE `sampleid` = '70'
DEBUG - 2024-12-09 09:50:13 --> Total execution time: 2.5435
DEBUG - 2024-12-09 09:51:00 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:51:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:51:00 --> Total execution time: 0.1374
DEBUG - 2024-12-09 09:51:00 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:51:00 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:51:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:51:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:51:00 --> Total execution time: 0.0702
DEBUG - 2024-12-09 09:51:00 --> Total execution time: 0.0913
DEBUG - 2024-12-09 09:51:04 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:51:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:51:04 --> Total execution time: 0.0565
DEBUG - 2024-12-09 09:51:06 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:51:06 --> UTF-8 Support Enabled
DEBUG - 2024-12-09 09:51:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:51:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-09 09:51:06 --> SELECT *
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
WHERE `sampleid` = '70'
DEBUG - 2024-12-09 09:51:06 --> Total execution time: 0.0411
DEBUG - 2024-12-09 09:51:06 --> SELECT *
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
WHERE `sampleid` = '69'
DEBUG - 2024-12-09 09:51:06 --> Total execution time: 0.4534
