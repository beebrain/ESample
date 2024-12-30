<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2024-12-12 07:10:50 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:10:50 --> No URI present. Default controller set.
DEBUG - 2024-12-12 07:10:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:10:51 --> Total execution time: 1.3108
DEBUG - 2024-12-12 07:10:55 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:10:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:10:55 --> Total execution time: 0.1935
DEBUG - 2024-12-12 07:10:57 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:10:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:10:57 --> Total execution time: 0.2668
DEBUG - 2024-12-12 07:10:58 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:10:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:10:58 --> Total execution time: 0.1554
DEBUG - 2024-12-12 07:14:58 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:14:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:14:58 --> Total execution time: 0.0812
DEBUG - 2024-12-12 07:14:58 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:14:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:14:58 --> Total execution time: 0.0405
DEBUG - 2024-12-12 07:14:59 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:14:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:14:59 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` = '0000-00-00 00:00:00'
 LIMIT 10
DEBUG - 2024-12-12 07:14:59 --> Total execution time: 0.1636
DEBUG - 2024-12-12 07:15:30 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:15:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:15:30 --> Total execution time: 0.0344
DEBUG - 2024-12-12 07:15:31 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:15:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:15:31 --> Total execution time: 0.0494
DEBUG - 2024-12-12 07:15:31 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:15:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:15:31 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` = '0000-00-00 00:00:00'
 LIMIT 10
DEBUG - 2024-12-12 07:15:31 --> Total execution time: 0.1603
DEBUG - 2024-12-12 07:20:15 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:20:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:20:15 --> Total execution time: 0.0807
DEBUG - 2024-12-12 07:20:16 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:20:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:20:16 --> Total execution time: 0.0561
DEBUG - 2024-12-12 07:20:16 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:20:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:20:16 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` = '0000-00-00 00:00:00'
 LIMIT 10
DEBUG - 2024-12-12 07:20:16 --> Total execution time: 0.1608
DEBUG - 2024-12-12 07:28:08 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:28:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:28:08 --> Total execution time: 0.1029
DEBUG - 2024-12-12 07:28:09 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:28:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:28:09 --> Total execution time: 0.0340
DEBUG - 2024-12-12 07:28:09 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:28:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:28:09 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` = '0000-00-00 00:00:00'
 LIMIT 10
DEBUG - 2024-12-12 07:28:09 --> Total execution time: 0.1617
DEBUG - 2024-12-12 07:31:59 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:31:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:31:59 --> Total execution time: 0.1127
DEBUG - 2024-12-12 07:32:00 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:32:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:32:00 --> Total execution time: 0.0684
DEBUG - 2024-12-12 07:32:00 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:32:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:32:00 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` = '0000-00-00 00:00:00'
 LIMIT 10
DEBUG - 2024-12-12 07:32:00 --> Total execution time: 0.0385
DEBUG - 2024-12-12 07:33:05 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:33:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:33:05 --> Total execution time: 0.1164
DEBUG - 2024-12-12 07:33:06 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:33:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:33:06 --> Total execution time: 0.0546
DEBUG - 2024-12-12 07:33:07 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:33:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:33:07 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` = '0000-00-00 00:00:00'
 LIMIT 10
DEBUG - 2024-12-12 07:33:07 --> Total execution time: 0.0395
DEBUG - 2024-12-12 07:33:49 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:33:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:33:49 --> Total execution time: 0.0374
DEBUG - 2024-12-12 07:33:49 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:33:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:33:49 --> Total execution time: 0.0294
DEBUG - 2024-12-12 07:33:50 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:33:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:33:50 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` = '0000-00-00 00:00:00'
 LIMIT 10
DEBUG - 2024-12-12 07:33:50 --> Total execution time: 0.0530
DEBUG - 2024-12-12 07:34:51 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:34:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:34:51 --> Total execution time: 0.0317
DEBUG - 2024-12-12 07:34:52 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:34:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:34:52 --> Total execution time: 0.0553
DEBUG - 2024-12-12 07:34:52 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:34:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:34:53 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` = '0000-00-00 00:00:00'
 LIMIT 10
DEBUG - 2024-12-12 07:34:53 --> Total execution time: 0.2084
DEBUG - 2024-12-12 07:35:06 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:35:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:35:06 --> Total execution time: 0.0296
DEBUG - 2024-12-12 07:35:07 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:35:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:35:07 --> Total execution time: 0.0551
DEBUG - 2024-12-12 07:35:07 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:35:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:35:07 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` = '0000-00-00 00:00:00'
 LIMIT 10
DEBUG - 2024-12-12 07:35:07 --> Total execution time: 0.1905
DEBUG - 2024-12-12 07:36:39 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:36:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:36:39 --> Total execution time: 0.0516
DEBUG - 2024-12-12 07:36:40 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:36:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:36:40 --> Total execution time: 0.0451
DEBUG - 2024-12-12 07:36:40 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:36:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:36:40 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` = '0000-00-00 00:00:00'
 LIMIT 10
DEBUG - 2024-12-12 07:36:40 --> Total execution time: 0.1424
DEBUG - 2024-12-12 07:37:31 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:37:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:37:31 --> Total execution time: 0.0561
DEBUG - 2024-12-12 07:37:32 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:37:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:37:32 --> Total execution time: 0.0321
DEBUG - 2024-12-12 07:37:32 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:37:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:37:33 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` = 'NULL'
 LIMIT 10
DEBUG - 2024-12-12 07:37:33 --> Total execution time: 0.2721
DEBUG - 2024-12-12 07:42:17 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:42:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:42:17 --> Total execution time: 0.0411
DEBUG - 2024-12-12 07:42:18 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:42:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:42:18 --> Total execution time: 0.0360
DEBUG - 2024-12-12 07:42:18 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:42:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:42:18 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-12 07:42:18 --> Total execution time: 0.2547
DEBUG - 2024-12-12 07:42:59 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:42:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:42:59 --> Total execution time: 0.0916
DEBUG - 2024-12-12 07:43:00 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:43:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:43:00 --> Total execution time: 0.0257
DEBUG - 2024-12-12 07:43:00 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:43:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:43:00 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-12 07:43:00 --> Total execution time: 0.1749
DEBUG - 2024-12-12 07:43:39 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:43:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:43:39 --> Total execution time: 0.0752
DEBUG - 2024-12-12 07:44:00 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:44:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:44:00 --> Total execution time: 0.0954
DEBUG - 2024-12-12 07:44:01 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:44:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:44:01 --> Total execution time: 0.0557
DEBUG - 2024-12-12 07:44:01 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:44:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:44:02 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-12 07:44:02 --> Total execution time: 0.1680
DEBUG - 2024-12-12 07:46:14 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:46:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:46:14 --> Total execution time: 0.0918
DEBUG - 2024-12-12 07:46:15 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:46:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:46:15 --> Total execution time: 0.0314
DEBUG - 2024-12-12 07:46:16 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:46:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:46:16 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-12 07:46:16 --> Total execution time: 0.1309
DEBUG - 2024-12-12 07:47:32 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:47:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:47:32 --> Total execution time: 0.0625
DEBUG - 2024-12-12 07:47:33 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:47:33 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:47:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:47:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:47:33 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-12 07:47:33 --> Total execution time: 0.0371
DEBUG - 2024-12-12 07:47:33 --> Total execution time: 0.0499
DEBUG - 2024-12-12 07:48:47 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:48:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:48:47 --> Total execution time: 0.0793
DEBUG - 2024-12-12 07:48:48 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:48:48 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:48:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:48:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:48:48 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-12 07:48:48 --> Total execution time: 0.0445
DEBUG - 2024-12-12 07:48:48 --> Total execution time: 0.0574
DEBUG - 2024-12-12 07:48:57 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:48:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:49:02 --> get_method_names called with term: Me
DEBUG - 2024-12-12 07:49:02 --> Returned methods: [{"idmethod":"00001","methodname":"Method 1"},{"idmethod":"00002","methodname":"Method 1 S"},{"idmethod":"00003","methodname":"Method 1 S"},{"idmethod":"00004","methodname":"Method 1 S"},{"idmethod":"00005","methodname":"Method 1 S"},{"idmethod":"00006","methodname":"Method 1 S"},{"idmethod":"00015","methodname":"Method 1"},{"idmethod":"00016","methodname":"Method 1"},{"idmethod":"00017","methodname":"Method 1 S"},{"idmethod":"00018","methodname":"Method 1 S"},{"idmethod":"00019","methodname":"Method 1 S"},{"idmethod":"00020","methodname":"Method 1 S"},{"idmethod":"00021","methodname":"Method 1 S"}]
ERROR - 2024-12-12 07:49:02 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:49:02 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:49:02 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:49:02 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:49:02 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:49:02 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:49:02 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:49:02 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:49:02 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:49:02 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:49:02 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:49:02 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:49:02 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
DEBUG - 2024-12-12 07:49:02 --> Total execution time: 4.9864
DEBUG - 2024-12-12 07:49:15 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:49:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:49:15 --> get_method_names called with term: Me
DEBUG - 2024-12-12 07:49:15 --> Returned methods: [{"idmethod":"00001","methodname":"Method 1"},{"idmethod":"00002","methodname":"Method 1 S"},{"idmethod":"00003","methodname":"Method 1 S"},{"idmethod":"00004","methodname":"Method 1 S"},{"idmethod":"00005","methodname":"Method 1 S"},{"idmethod":"00006","methodname":"Method 1 S"},{"idmethod":"00015","methodname":"Method 1"},{"idmethod":"00016","methodname":"Method 1"},{"idmethod":"00017","methodname":"Method 1 S"},{"idmethod":"00018","methodname":"Method 1 S"},{"idmethod":"00019","methodname":"Method 1 S"},{"idmethod":"00020","methodname":"Method 1 S"},{"idmethod":"00021","methodname":"Method 1 S"}]
ERROR - 2024-12-12 07:49:15 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:49:15 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:49:15 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:49:15 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:49:15 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:49:15 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:49:15 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:49:15 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:49:15 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:49:15 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:49:15 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:49:15 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:49:15 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
DEBUG - 2024-12-12 07:49:15 --> Total execution time: 0.0551
DEBUG - 2024-12-12 07:49:34 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:49:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:49:34 --> get_method_names called with term: Me
DEBUG - 2024-12-12 07:49:34 --> Returned methods: [{"idmethod":"00001","methodname":"Method 1"},{"idmethod":"00002","methodname":"Method 1 S"},{"idmethod":"00003","methodname":"Method 1 S"},{"idmethod":"00004","methodname":"Method 1 S"},{"idmethod":"00005","methodname":"Method 1 S"},{"idmethod":"00006","methodname":"Method 1 S"},{"idmethod":"00015","methodname":"Method 1"},{"idmethod":"00016","methodname":"Method 1"},{"idmethod":"00017","methodname":"Method 1 S"},{"idmethod":"00018","methodname":"Method 1 S"},{"idmethod":"00019","methodname":"Method 1 S"},{"idmethod":"00020","methodname":"Method 1 S"},{"idmethod":"00021","methodname":"Method 1 S"}]
ERROR - 2024-12-12 07:49:34 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:49:34 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:49:34 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:49:34 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:49:34 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:49:34 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:49:34 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:49:34 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:49:34 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:49:34 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:49:34 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:49:34 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:49:34 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
DEBUG - 2024-12-12 07:49:34 --> Total execution time: 0.0353
DEBUG - 2024-12-12 07:49:35 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:49:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:49:35 --> get_method_names called with term: Met
DEBUG - 2024-12-12 07:49:35 --> Returned methods: [{"idmethod":"00001","methodname":"Method 1"},{"idmethod":"00002","methodname":"Method 1 S"},{"idmethod":"00003","methodname":"Method 1 S"},{"idmethod":"00004","methodname":"Method 1 S"},{"idmethod":"00005","methodname":"Method 1 S"},{"idmethod":"00006","methodname":"Method 1 S"},{"idmethod":"00015","methodname":"Method 1"},{"idmethod":"00016","methodname":"Method 1"},{"idmethod":"00017","methodname":"Method 1 S"},{"idmethod":"00018","methodname":"Method 1 S"},{"idmethod":"00019","methodname":"Method 1 S"},{"idmethod":"00020","methodname":"Method 1 S"},{"idmethod":"00021","methodname":"Method 1 S"}]
ERROR - 2024-12-12 07:49:35 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:49:35 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:49:35 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:49:35 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:49:35 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:49:35 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:49:35 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:49:35 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:49:35 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:49:35 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:49:35 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:49:35 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:49:35 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
DEBUG - 2024-12-12 07:49:35 --> Total execution time: 0.0418
DEBUG - 2024-12-12 07:49:37 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:49:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:49:38 --> get_method_names called with term: Metho
DEBUG - 2024-12-12 07:49:38 --> Returned methods: [{"idmethod":"00001","methodname":"Method 1"},{"idmethod":"00002","methodname":"Method 1 S"},{"idmethod":"00003","methodname":"Method 1 S"},{"idmethod":"00004","methodname":"Method 1 S"},{"idmethod":"00005","methodname":"Method 1 S"},{"idmethod":"00006","methodname":"Method 1 S"},{"idmethod":"00015","methodname":"Method 1"},{"idmethod":"00016","methodname":"Method 1"},{"idmethod":"00017","methodname":"Method 1 S"},{"idmethod":"00018","methodname":"Method 1 S"},{"idmethod":"00019","methodname":"Method 1 S"},{"idmethod":"00020","methodname":"Method 1 S"},{"idmethod":"00021","methodname":"Method 1 S"}]
ERROR - 2024-12-12 07:49:38 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:49:38 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:49:38 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:49:38 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:49:38 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:49:38 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:49:38 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:49:38 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:49:38 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:49:38 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:49:38 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:49:38 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:49:38 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
DEBUG - 2024-12-12 07:49:38 --> Total execution time: 0.0547
DEBUG - 2024-12-12 07:50:26 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:50:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:50:26 --> Total execution time: 0.0532
DEBUG - 2024-12-12 07:50:27 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:50:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:50:27 --> Total execution time: 0.0382
DEBUG - 2024-12-12 07:50:27 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:50:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:50:28 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-12 07:50:28 --> Total execution time: 0.2816
DEBUG - 2024-12-12 07:50:57 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:50:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:50:57 --> get_method_names called with term: Me
DEBUG - 2024-12-12 07:50:57 --> Returned methods: [{"idmethod":"00001","methodname":"Method 1"},{"idmethod":"00002","methodname":"Method 1 S"},{"idmethod":"00003","methodname":"Method 1 S"},{"idmethod":"00004","methodname":"Method 1 S"},{"idmethod":"00005","methodname":"Method 1 S"},{"idmethod":"00006","methodname":"Method 1 S"},{"idmethod":"00015","methodname":"Method 1"},{"idmethod":"00016","methodname":"Method 1"},{"idmethod":"00017","methodname":"Method 1 S"},{"idmethod":"00018","methodname":"Method 1 S"},{"idmethod":"00019","methodname":"Method 1 S"},{"idmethod":"00020","methodname":"Method 1 S"},{"idmethod":"00021","methodname":"Method 1 S"}]
ERROR - 2024-12-12 07:50:57 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:50:57 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:50:57 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:50:57 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:50:57 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:50:57 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:50:57 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:50:57 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:50:57 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:50:57 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:50:57 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:50:57 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:50:57 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
DEBUG - 2024-12-12 07:50:57 --> Total execution time: 0.0564
DEBUG - 2024-12-12 07:53:26 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:53:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:53:26 --> get_method_names called with term: Method 1 
DEBUG - 2024-12-12 07:53:26 --> Returned methods: [{"idmethod":"00002","methodname":"Method 1 S"},{"idmethod":"00003","methodname":"Method 1 S"},{"idmethod":"00004","methodname":"Method 1 S"},{"idmethod":"00005","methodname":"Method 1 S"},{"idmethod":"00006","methodname":"Method 1 S"},{"idmethod":"00017","methodname":"Method 1 S"},{"idmethod":"00018","methodname":"Method 1 S"},{"idmethod":"00019","methodname":"Method 1 S"},{"idmethod":"00020","methodname":"Method 1 S"},{"idmethod":"00021","methodname":"Method 1 S"}]
ERROR - 2024-12-12 07:53:26 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:53:26 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:53:26 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:53:26 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:53:26 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:53:26 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:53:26 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:53:26 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:53:26 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:53:26 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
DEBUG - 2024-12-12 07:53:26 --> Total execution time: 0.0542
DEBUG - 2024-12-12 07:53:30 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:53:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:53:31 --> get_method_names called with term: Met
DEBUG - 2024-12-12 07:53:31 --> Returned methods: [{"idmethod":"00001","methodname":"Method 1"},{"idmethod":"00002","methodname":"Method 1 S"},{"idmethod":"00003","methodname":"Method 1 S"},{"idmethod":"00004","methodname":"Method 1 S"},{"idmethod":"00005","methodname":"Method 1 S"},{"idmethod":"00006","methodname":"Method 1 S"},{"idmethod":"00015","methodname":"Method 1"},{"idmethod":"00016","methodname":"Method 1"},{"idmethod":"00017","methodname":"Method 1 S"},{"idmethod":"00018","methodname":"Method 1 S"},{"idmethod":"00019","methodname":"Method 1 S"},{"idmethod":"00020","methodname":"Method 1 S"},{"idmethod":"00021","methodname":"Method 1 S"}]
ERROR - 2024-12-12 07:53:31 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:53:31 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:53:31 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:53:31 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:53:31 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:53:31 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:53:31 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:53:31 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:53:31 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:53:31 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:53:31 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:53:31 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:53:31 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
DEBUG - 2024-12-12 07:53:31 --> Total execution time: 0.0351
DEBUG - 2024-12-12 07:53:40 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:53:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:53:40 --> get_method_names called with term: Mete
DEBUG - 2024-12-12 07:53:40 --> Returned methods: []
DEBUG - 2024-12-12 07:53:40 --> Total execution time: 0.0371
DEBUG - 2024-12-12 07:54:08 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:54:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:54:08 --> get_method_names called with term: Method
DEBUG - 2024-12-12 07:54:08 --> Returned methods: [{"idmethod":"00001","methodname":"Method 1"},{"idmethod":"00002","methodname":"Method 1 S"},{"idmethod":"00003","methodname":"Method 1 S"},{"idmethod":"00004","methodname":"Method 1 S"},{"idmethod":"00005","methodname":"Method 1 S"},{"idmethod":"00006","methodname":"Method 1 S"},{"idmethod":"00015","methodname":"Method 1"},{"idmethod":"00016","methodname":"Method 1"},{"idmethod":"00017","methodname":"Method 1 S"},{"idmethod":"00018","methodname":"Method 1 S"},{"idmethod":"00019","methodname":"Method 1 S"},{"idmethod":"00020","methodname":"Method 1 S"},{"idmethod":"00021","methodname":"Method 1 S"}]
ERROR - 2024-12-12 07:54:08 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:54:08 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:54:08 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:54:08 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:54:08 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:54:08 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:54:08 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:54:08 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:54:08 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:54:08 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:54:08 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:54:08 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:54:08 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
DEBUG - 2024-12-12 07:54:08 --> Total execution time: 0.0597
DEBUG - 2024-12-12 07:59:22 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:59:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:59:22 --> Total execution time: 0.1183
DEBUG - 2024-12-12 07:59:23 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:59:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:59:23 --> Total execution time: 0.0538
DEBUG - 2024-12-12 07:59:23 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:59:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:59:24 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-12 07:59:24 --> Total execution time: 0.4030
DEBUG - 2024-12-12 07:59:48 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:59:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:59:48 --> Total execution time: 0.0682
DEBUG - 2024-12-12 07:59:49 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:59:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:59:49 --> Total execution time: 0.0407
DEBUG - 2024-12-12 07:59:50 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:59:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:59:50 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-12 07:59:50 --> Total execution time: 0.1579
DEBUG - 2024-12-12 07:59:57 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 07:59:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 07:59:57 --> get_method_names called with term: Meth
DEBUG - 2024-12-12 07:59:57 --> Returned methods: [{"idmethod":"00001","methodname":"Method 1"},{"idmethod":"00002","methodname":"Method 1 S"},{"idmethod":"00003","methodname":"Method 1 S"},{"idmethod":"00004","methodname":"Method 1 S"},{"idmethod":"00005","methodname":"Method 1 S"},{"idmethod":"00006","methodname":"Method 1 S"},{"idmethod":"00015","methodname":"Method 1"},{"idmethod":"00016","methodname":"Method 1"},{"idmethod":"00017","methodname":"Method 1 S"},{"idmethod":"00018","methodname":"Method 1 S"},{"idmethod":"00019","methodname":"Method 1 S"},{"idmethod":"00020","methodname":"Method 1 S"},{"idmethod":"00021","methodname":"Method 1 S"}]
ERROR - 2024-12-12 07:59:57 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:59:57 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:59:57 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:59:57 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:59:57 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:59:57 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:59:57 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:59:57 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:59:57 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:59:57 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:59:57 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:59:57 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 07:59:57 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
DEBUG - 2024-12-12 07:59:57 --> Total execution time: 0.0324
DEBUG - 2024-12-12 08:00:05 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:00:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:00:05 --> UPDATE `es_sampletestservice` SET `testvalue` = '11', `methodName` = 'Method 1 S', `completetime` = '2024-12-12 08:00:05'
WHERE `id` = '903'
DEBUG - 2024-12-12 08:00:05 --> Total execution time: 0.0399
DEBUG - 2024-12-12 08:00:06 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:00:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:00:06 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-12 08:00:06 --> Total execution time: 0.0525
DEBUG - 2024-12-12 08:00:24 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:00:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:00:24 --> UPDATE `es_sampletestservice` SET `testvalue` = '', `methodName` = '', `completetime` = '2024-12-12 08:00:24'
WHERE `id` = '904'
DEBUG - 2024-12-12 08:00:24 --> Total execution time: 0.0644
DEBUG - 2024-12-12 08:00:25 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:00:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:00:25 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-12 08:00:25 --> Total execution time: 0.0297
DEBUG - 2024-12-12 08:02:46 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:02:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:02:46 --> Total execution time: 0.0912
DEBUG - 2024-12-12 08:02:47 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:02:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:02:47 --> Total execution time: 0.0471
DEBUG - 2024-12-12 08:02:47 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:02:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:02:47 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-12 08:02:47 --> Total execution time: 0.1958
DEBUG - 2024-12-12 08:03:05 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:03:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:03:05 --> get_method_names called with term: aee
DEBUG - 2024-12-12 08:03:05 --> Returned methods: []
DEBUG - 2024-12-12 08:03:05 --> Total execution time: 0.0280
DEBUG - 2024-12-12 08:03:08 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:03:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:03:08 --> UPDATE `es_sampletestservice` SET `testvalue` = '11', `methodName` = 'aee', `completetime` = '2024-12-12 08:03:08'
WHERE `id` = '903'
DEBUG - 2024-12-12 08:03:08 --> Total execution time: 0.0618
DEBUG - 2024-12-12 08:03:16 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:03:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:03:16 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-12 08:03:16 --> Total execution time: 0.0410
DEBUG - 2024-12-12 08:03:42 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:03:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:03:42 --> Total execution time: 0.0391
DEBUG - 2024-12-12 08:03:43 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:03:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:03:43 --> Total execution time: 0.0586
DEBUG - 2024-12-12 08:03:43 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:03:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:03:44 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-12 08:03:44 --> Total execution time: 0.2356
DEBUG - 2024-12-12 08:04:59 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:04:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:05:01 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:05:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:05:09 --> get_method_names called with term: 2234
DEBUG - 2024-12-12 08:05:11 --> Returned methods: []
DEBUG - 2024-12-12 08:05:14 --> Total execution time: 14.8732
DEBUG - 2024-12-12 08:05:43 --> UPDATE `es_sampletestservice` SET `testvalue` = '333', `methodName` = '2234', `completetime` = '2024-12-12 08:05:42'
WHERE `id` = '903'
DEBUG - 2024-12-12 08:05:43 --> Total execution time: 42.1721
DEBUG - 2024-12-12 08:06:10 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:06:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:06:19 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:06:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:06:19 --> Total execution time: 0.0354
DEBUG - 2024-12-12 08:06:20 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:06:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:06:20 --> Total execution time: 0.0314
DEBUG - 2024-12-12 08:06:20 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:06:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:06:20 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-12 08:06:20 --> Total execution time: 0.2821
DEBUG - 2024-12-12 08:06:34 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:06:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:06:34 --> get_method_names called with term: Me
DEBUG - 2024-12-12 08:06:34 --> Returned methods: [{"idmethod":"00001","methodname":"Method 1"},{"idmethod":"00002","methodname":"Method 1 S"},{"idmethod":"00003","methodname":"Method 1 S"},{"idmethod":"00004","methodname":"Method 1 S"},{"idmethod":"00005","methodname":"Method 1 S"},{"idmethod":"00006","methodname":"Method 1 S"},{"idmethod":"00015","methodname":"Method 1"},{"idmethod":"00016","methodname":"Method 1"},{"idmethod":"00017","methodname":"Method 1 S"},{"idmethod":"00018","methodname":"Method 1 S"},{"idmethod":"00019","methodname":"Method 1 S"},{"idmethod":"00020","methodname":"Method 1 S"},{"idmethod":"00021","methodname":"Method 1 S"},{"idmethod":"00022","methodname":"Method 1 S"}]
ERROR - 2024-12-12 08:06:34 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 08:06:34 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 08:06:34 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 08:06:34 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 08:06:34 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 08:06:34 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 08:06:34 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 08:06:34 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 08:06:34 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 08:06:34 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 08:06:34 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 08:06:34 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 08:06:34 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 08:06:34 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
DEBUG - 2024-12-12 08:06:34 --> Total execution time: 0.0590
DEBUG - 2024-12-12 08:06:36 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:06:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:06:36 --> get_method_names called with term: Met
DEBUG - 2024-12-12 08:06:36 --> Returned methods: [{"idmethod":"00001","methodname":"Method 1"},{"idmethod":"00002","methodname":"Method 1 S"},{"idmethod":"00003","methodname":"Method 1 S"},{"idmethod":"00004","methodname":"Method 1 S"},{"idmethod":"00005","methodname":"Method 1 S"},{"idmethod":"00006","methodname":"Method 1 S"},{"idmethod":"00015","methodname":"Method 1"},{"idmethod":"00016","methodname":"Method 1"},{"idmethod":"00017","methodname":"Method 1 S"},{"idmethod":"00018","methodname":"Method 1 S"},{"idmethod":"00019","methodname":"Method 1 S"},{"idmethod":"00020","methodname":"Method 1 S"},{"idmethod":"00021","methodname":"Method 1 S"},{"idmethod":"00022","methodname":"Method 1 S"}]
ERROR - 2024-12-12 08:06:36 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 08:06:36 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 08:06:36 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 08:06:36 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 08:06:36 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 08:06:36 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 08:06:36 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 08:06:36 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 08:06:36 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 08:06:36 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 08:06:36 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 08:06:36 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 08:06:36 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 08:06:36 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
DEBUG - 2024-12-12 08:06:36 --> Total execution time: 0.0557
DEBUG - 2024-12-12 08:06:39 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:06:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:06:39 --> get_method_names called with term: 22
DEBUG - 2024-12-12 08:06:39 --> Returned methods: [{"idmethod":"00025","methodname":"2234"}]
ERROR - 2024-12-12 08:06:39 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
DEBUG - 2024-12-12 08:06:39 --> Total execution time: 0.0510
DEBUG - 2024-12-12 08:06:45 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:06:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:06:45 --> UPDATE `es_sampletestservice` SET `testvalue` = '3 xdfadfdf', `methodName` = '2234', `completetime` = '2024-12-12 08:06:45'
WHERE `id` = '904'
DEBUG - 2024-12-12 08:06:45 --> Total execution time: 0.0625
DEBUG - 2024-12-12 08:06:57 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:06:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:06:57 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-12 08:06:57 --> Total execution time: 0.0517
DEBUG - 2024-12-12 08:07:05 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:07:05 --> Global POST, GET and COOKIE data sanitized
ERROR - 2024-12-12 08:07:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '`NOT` IS NULL' at line 7 - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` `NOT` IS NULL
ERROR - 2024-12-12 08:07:05 --> Severity: Warning --> include(C:\xampp\htdocs\ESample\application\views\errors\html\error_db.php): Failed to open stream: No such file or directory C:\xampp\htdocs\ESample\system\core\Exceptions.php 183
ERROR - 2024-12-12 08:07:05 --> Severity: Warning --> include(): Failed opening 'C:\xampp\htdocs\ESample\application\views\errors\html\error_db.php' for inclusion (include_path='C:\xampp\php\PEAR') C:\xampp\htdocs\ESample\system\core\Exceptions.php 183
DEBUG - 2024-12-12 08:07:12 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:07:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:07:12 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-12 08:07:12 --> Total execution time: 0.0368
DEBUG - 2024-12-12 08:07:16 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:07:16 --> Global POST, GET and COOKIE data sanitized
ERROR - 2024-12-12 08:07:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '`NOT` IS NULL' at line 7 - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` `NOT` IS NULL
ERROR - 2024-12-12 08:07:16 --> Severity: Warning --> include(C:\xampp\htdocs\ESample\application\views\errors\html\error_db.php): Failed to open stream: No such file or directory C:\xampp\htdocs\ESample\system\core\Exceptions.php 183
ERROR - 2024-12-12 08:07:16 --> Severity: Warning --> include(): Failed opening 'C:\xampp\htdocs\ESample\application\views\errors\html\error_db.php' for inclusion (include_path='C:\xampp\php\PEAR') C:\xampp\htdocs\ESample\system\core\Exceptions.php 183
DEBUG - 2024-12-12 08:08:44 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:08:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:08:44 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-12 08:08:44 --> Total execution time: 0.0380
DEBUG - 2024-12-12 08:08:57 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:08:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:09:36 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:09:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:09:40 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-12 08:09:40 --> Total execution time: 3.8165
DEBUG - 2024-12-12 08:09:46 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:09:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:09:48 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NOT NULL
 LIMIT 10
DEBUG - 2024-12-12 08:09:48 --> Total execution time: 2.1507
DEBUG - 2024-12-12 08:10:19 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:10:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:10:24 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:10:24 --> Global POST, GET and COOKIE data sanitized
ERROR - 2024-12-12 08:10:25 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 376
DEBUG - 2024-12-12 08:10:26 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
DEBUG - 2024-12-12 08:10:26 --> Total execution time: 7.0257
DEBUG - 2024-12-12 08:10:26 --> Total execution time: 2.2510
DEBUG - 2024-12-12 08:10:27 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:10:27 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:10:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:10:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:10:27 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-12 08:10:27 --> Total execution time: 0.0612
DEBUG - 2024-12-12 08:10:27 --> Total execution time: 0.0864
DEBUG - 2024-12-12 08:10:35 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:10:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:10:35 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NOT NULL
 LIMIT 10
DEBUG - 2024-12-12 08:10:35 --> Total execution time: 0.0305
DEBUG - 2024-12-12 08:11:36 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:11:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:11:36 --> Total execution time: 0.0510
DEBUG - 2024-12-12 08:11:37 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:11:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:11:37 --> Total execution time: 0.0387
DEBUG - 2024-12-12 08:11:38 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:11:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:11:38 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-12 08:11:38 --> Total execution time: 0.1653
DEBUG - 2024-12-12 08:11:44 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:11:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:11:44 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NOT NULL
 LIMIT 10
DEBUG - 2024-12-12 08:11:44 --> Total execution time: 0.0399
DEBUG - 2024-12-12 08:12:56 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:12:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:12:56 --> Total execution time: 0.0749
DEBUG - 2024-12-12 08:12:57 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:12:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:12:57 --> Total execution time: 0.0346
DEBUG - 2024-12-12 08:12:57 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:12:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:12:57 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-12 08:12:57 --> Total execution time: 0.1418
DEBUG - 2024-12-12 08:13:00 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:13:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:13:00 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NOT NULL
 LIMIT 10
DEBUG - 2024-12-12 08:13:00 --> Total execution time: 0.0406
DEBUG - 2024-12-12 08:13:12 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:13:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:13:12 --> get_method_names called with term: 223
DEBUG - 2024-12-12 08:13:12 --> Returned methods: [{"idmethod":"00025","methodname":"2234"},{"idmethod":"00026","methodname":"2234"}]
ERROR - 2024-12-12 08:13:12 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 08:13:12 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
DEBUG - 2024-12-12 08:13:12 --> Total execution time: 0.0318
DEBUG - 2024-12-12 08:13:14 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:13:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:13:14 --> get_method_names called with term: 22
DEBUG - 2024-12-12 08:13:14 --> Returned methods: [{"idmethod":"00025","methodname":"2234"},{"idmethod":"00026","methodname":"2234"}]
ERROR - 2024-12-12 08:13:14 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 08:13:14 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
DEBUG - 2024-12-12 08:13:14 --> Total execution time: 0.0377
DEBUG - 2024-12-12 08:13:30 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:13:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:13:30 --> UPDATE `es_sampletestservice` SET `testvalue` = '333', `methodName` = '2234', `completetime` = '2024-12-12 08:13:30'
WHERE `id` = '903'
DEBUG - 2024-12-12 08:13:30 --> Total execution time: 0.0633
DEBUG - 2024-12-12 08:13:31 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:13:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:13:31 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NOT NULL
 LIMIT 10
DEBUG - 2024-12-12 08:13:31 --> Total execution time: 0.0546
DEBUG - 2024-12-12 08:15:06 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:15:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:15:06 --> Total execution time: 0.0506
DEBUG - 2024-12-12 08:15:07 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:15:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:15:07 --> Total execution time: 0.0347
DEBUG - 2024-12-12 08:15:07 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:15:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:15:07 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-12 08:15:07 --> Total execution time: 0.1569
DEBUG - 2024-12-12 08:17:54 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:17:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:17:54 --> Total execution time: 0.0915
DEBUG - 2024-12-12 08:17:55 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:17:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:17:55 --> Total execution time: 0.0427
DEBUG - 2024-12-12 08:17:56 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:17:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:17:56 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-12 08:17:56 --> Total execution time: 0.1474
DEBUG - 2024-12-12 08:18:49 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:18:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:18:49 --> Total execution time: 0.0699
DEBUG - 2024-12-12 08:18:50 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:18:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:18:50 --> Total execution time: 0.0336
DEBUG - 2024-12-12 08:18:51 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:18:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:18:51 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-12 08:18:51 --> Total execution time: 0.1750
DEBUG - 2024-12-12 08:19:09 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:19:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:19:09 --> Total execution time: 0.0499
DEBUG - 2024-12-12 08:19:10 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:19:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:19:10 --> Total execution time: 0.0319
DEBUG - 2024-12-12 08:19:10 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:19:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:19:11 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-12 08:19:11 --> Total execution time: 0.1104
DEBUG - 2024-12-12 08:21:17 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:21:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:21:17 --> Total execution time: 0.0732
DEBUG - 2024-12-12 08:21:18 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:21:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:21:19 --> Total execution time: 0.0300
DEBUG - 2024-12-12 08:21:19 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:21:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:21:19 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-12 08:21:19 --> Total execution time: 0.2169
DEBUG - 2024-12-12 08:22:27 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:22:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:22:27 --> Total execution time: 0.0806
DEBUG - 2024-12-12 08:22:28 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:22:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:22:28 --> Total execution time: 0.0780
DEBUG - 2024-12-12 08:22:28 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:22:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:22:28 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-12 08:22:28 --> Total execution time: 0.3004
DEBUG - 2024-12-12 08:22:40 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:22:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:22:40 --> get_method_names called with term: 112
DEBUG - 2024-12-12 08:22:40 --> Returned methods: []
DEBUG - 2024-12-12 08:22:40 --> Total execution time: 0.0328
DEBUG - 2024-12-12 08:22:42 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:22:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:22:42 --> get_method_names called with term: 22
DEBUG - 2024-12-12 08:22:42 --> Returned methods: [{"idmethod":"00025","methodname":"2234"},{"idmethod":"00026","methodname":"2234"},{"idmethod":"00027","methodname":"2234"}]
ERROR - 2024-12-12 08:22:42 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 08:22:42 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 08:22:42 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
DEBUG - 2024-12-12 08:22:42 --> Total execution time: 0.0524
DEBUG - 2024-12-12 08:22:56 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:22:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:24:03 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:24:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:24:07 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:24:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:24:13 --> UPDATE `es_sampletestservice` SET `testvalue` = '11', `methodName` = '2234', `completetime` = '2024-12-12 08:24:12'
WHERE `id` = '903'
DEBUG - 2024-12-12 08:24:13 --> Total execution time: 77.0205
DEBUG - 2024-12-12 08:24:13 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:24:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:24:32 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:24:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:24:36 --> get_method_names called with term: 22
DEBUG - 2024-12-12 08:24:36 --> Returned methods: [{"idmethod":"00025","methodname":"2234"},{"idmethod":"00026","methodname":"2234"},{"idmethod":"00027","methodname":"2234"},{"idmethod":"00028","methodname":"2234"}]
ERROR - 2024-12-12 08:24:36 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 08:24:36 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 08:24:36 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 08:24:36 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
DEBUG - 2024-12-12 08:24:36 --> Total execution time: 3.5492
DEBUG - 2024-12-12 08:24:42 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:24:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:24:43 --> get_method_names called with term: 222
DEBUG - 2024-12-12 08:24:43 --> Returned methods: []
DEBUG - 2024-12-12 08:24:43 --> Total execution time: 1.2714
DEBUG - 2024-12-12 08:24:53 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:24:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:24:53 --> get_method_names called with term: 22
DEBUG - 2024-12-12 08:24:53 --> Returned methods: [{"idmethod":"00025","methodname":"2234"},{"idmethod":"00026","methodname":"2234"},{"idmethod":"00027","methodname":"2234"},{"idmethod":"00028","methodname":"2234"}]
ERROR - 2024-12-12 08:24:53 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 08:24:53 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 08:24:53 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 08:24:53 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
DEBUG - 2024-12-12 08:24:53 --> Total execution time: 0.0552
DEBUG - 2024-12-12 08:25:24 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:25:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:25:24 --> get_method_names called with term: 22
DEBUG - 2024-12-12 08:25:24 --> Returned methods: [{"idmethod":"00025","methodname":"2234"},{"idmethod":"00026","methodname":"2234"},{"idmethod":"00027","methodname":"2234"},{"idmethod":"00028","methodname":"2234"}]
ERROR - 2024-12-12 08:25:24 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 08:25:24 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 08:25:24 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 08:25:24 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
DEBUG - 2024-12-12 08:25:24 --> Total execution time: 0.0513
DEBUG - 2024-12-12 08:26:39 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:26:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:26:39 --> get_method_names called with term: 22
DEBUG - 2024-12-12 08:26:39 --> Returned methods: [{"idmethod":"00025","methodname":"2234"},{"idmethod":"00026","methodname":"2234"},{"idmethod":"00027","methodname":"2234"},{"idmethod":"00028","methodname":"2234"}]
ERROR - 2024-12-12 08:26:39 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 08:26:39 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 08:26:39 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 08:26:39 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
DEBUG - 2024-12-12 08:26:39 --> Total execution time: 0.0540
DEBUG - 2024-12-12 08:27:09 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:27:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:27:09 --> get_method_names called with term: 22
DEBUG - 2024-12-12 08:27:09 --> Returned methods: [{"idmethod":"00025","methodname":"2234"},{"idmethod":"00026","methodname":"2234"},{"idmethod":"00027","methodname":"2234"},{"idmethod":"00028","methodname":"2234"}]
ERROR - 2024-12-12 08:27:09 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 08:27:09 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 08:27:09 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 08:27:09 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
DEBUG - 2024-12-12 08:27:09 --> Total execution time: 0.0363
DEBUG - 2024-12-12 08:29:18 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:29:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:29:18 --> Total execution time: 0.0718
DEBUG - 2024-12-12 08:29:19 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:29:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:29:19 --> Total execution time: 0.0348
DEBUG - 2024-12-12 08:29:19 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:29:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:29:19 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-12 08:29:19 --> Total execution time: 0.1878
DEBUG - 2024-12-12 08:29:27 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:29:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:29:27 --> get_method_names called with term: 22
DEBUG - 2024-12-12 08:29:27 --> Returned methods: [{"idmethod":"00025","methodname":"2234"},{"idmethod":"00026","methodname":"2234"},{"idmethod":"00027","methodname":"2234"},{"idmethod":"00028","methodname":"2234"}]
ERROR - 2024-12-12 08:29:27 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 08:29:27 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 08:29:27 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 08:29:27 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
DEBUG - 2024-12-12 08:29:27 --> Total execution time: 0.0536
DEBUG - 2024-12-12 08:31:07 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:31:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:31:07 --> Total execution time: 0.0838
DEBUG - 2024-12-12 08:31:08 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:31:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:31:08 --> Total execution time: 0.0300
DEBUG - 2024-12-12 08:31:08 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:31:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:31:08 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-12 08:31:08 --> Total execution time: 0.1592
DEBUG - 2024-12-12 08:31:16 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:31:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:31:16 --> get_method_names called with term: 22
DEBUG - 2024-12-12 08:31:16 --> Returned methods: [{"idmethod":"00025","methodname":"2234"},{"idmethod":"00026","methodname":"2234"},{"idmethod":"00027","methodname":"2234"},{"idmethod":"00028","methodname":"2234"}]
ERROR - 2024-12-12 08:31:16 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 08:31:16 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 08:31:16 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 08:31:16 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
DEBUG - 2024-12-12 08:31:16 --> Total execution time: 0.0563
DEBUG - 2024-12-12 08:31:22 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:31:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:31:22 --> UPDATE `es_sampletestservice` SET `testvalue` = '1131', `methodName` = '2234', `completetime` = '2024-12-12 08:31:22'
WHERE `id` = '904'
DEBUG - 2024-12-12 08:31:22 --> Total execution time: 0.0606
DEBUG - 2024-12-12 08:31:24 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:31:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:31:24 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-12 08:31:24 --> Total execution time: 0.0526
DEBUG - 2024-12-12 08:31:28 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:31:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:31:28 --> Total execution time: 0.0514
DEBUG - 2024-12-12 08:31:29 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:31:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:31:29 --> Total execution time: 0.0400
DEBUG - 2024-12-12 08:31:29 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:31:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:31:29 --> Total execution time: 0.0356
DEBUG - 2024-12-12 08:31:33 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:31:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:31:33 --> Total execution time: 0.0492
DEBUG - 2024-12-12 08:31:34 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:31:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:31:34 --> Total execution time: 0.0405
DEBUG - 2024-12-12 08:31:34 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:31:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:31:34 --> Total execution time: 0.0423
DEBUG - 2024-12-12 08:35:51 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:35:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:35:51 --> Total execution time: 0.0516
DEBUG - 2024-12-12 08:35:52 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:35:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:35:52 --> Total execution time: 0.0540
DEBUG - 2024-12-12 08:35:52 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:35:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:35:52 --> Total execution time: 0.0560
DEBUG - 2024-12-12 08:36:06 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:36:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:36:06 --> Total execution time: 0.0868
DEBUG - 2024-12-12 08:36:07 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:36:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:36:07 --> Total execution time: 0.0357
DEBUG - 2024-12-12 08:36:07 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:36:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:36:07 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-12 08:36:08 --> Total execution time: 0.0602
DEBUG - 2024-12-12 08:36:11 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:36:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:36:11 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NOT NULL
 LIMIT 10
DEBUG - 2024-12-12 08:36:11 --> Total execution time: 0.0517
DEBUG - 2024-12-12 08:36:17 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:36:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:36:17 --> UPDATE `es_sampletestservice` SET `testvalue` = '11', `methodName` = '2234', `completetime` = '2024-12-12 08:36:17'
WHERE `id` = '903'
DEBUG - 2024-12-12 08:36:17 --> Total execution time: 0.0597
DEBUG - 2024-12-12 08:36:20 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:36:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:36:20 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NOT NULL
 LIMIT 10
DEBUG - 2024-12-12 08:36:20 --> Total execution time: 0.0422
DEBUG - 2024-12-12 08:36:23 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:36:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:36:23 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-12 08:36:23 --> Total execution time: 0.0323
DEBUG - 2024-12-12 08:36:41 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:36:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:36:41 --> Total execution time: 0.0622
DEBUG - 2024-12-12 08:36:42 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:36:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:36:42 --> Total execution time: 0.0753
DEBUG - 2024-12-12 08:36:42 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:36:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:36:42 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-12 08:36:42 --> Total execution time: 0.0716
DEBUG - 2024-12-12 08:36:45 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:36:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:36:45 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-12 08:36:45 --> Total execution time: 0.0555
DEBUG - 2024-12-12 08:36:51 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:36:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:36:51 --> get_method_names called with term: 22
DEBUG - 2024-12-12 08:36:51 --> Returned methods: [{"idmethod":"00025","methodname":"2234"},{"idmethod":"00026","methodname":"2234"},{"idmethod":"00027","methodname":"2234"},{"idmethod":"00028","methodname":"2234"},{"idmethod":"00029","methodname":"2234"},{"idmethod":"00030","methodname":"2234"}]
ERROR - 2024-12-12 08:36:51 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 08:36:51 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 08:36:51 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 08:36:51 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 08:36:51 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 08:36:51 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
DEBUG - 2024-12-12 08:36:51 --> Total execution time: 0.0548
DEBUG - 2024-12-12 08:36:57 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:36:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:36:57 --> get_method_names called with term: 22
DEBUG - 2024-12-12 08:36:57 --> Returned methods: [{"idmethod":"00025","methodname":"2234"},{"idmethod":"00026","methodname":"2234"},{"idmethod":"00027","methodname":"2234"},{"idmethod":"00028","methodname":"2234"},{"idmethod":"00029","methodname":"2234"},{"idmethod":"00030","methodname":"2234"}]
ERROR - 2024-12-12 08:36:57 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 08:36:57 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 08:36:57 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 08:36:57 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 08:36:57 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 08:36:57 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
DEBUG - 2024-12-12 08:36:57 --> Total execution time: 0.0579
DEBUG - 2024-12-12 08:37:38 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:37:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:37:38 --> Total execution time: 0.0964
DEBUG - 2024-12-12 08:37:39 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:37:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:37:39 --> Total execution time: 0.0684
DEBUG - 2024-12-12 08:37:39 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:37:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:37:39 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-12 08:37:39 --> Total execution time: 0.0522
DEBUG - 2024-12-12 08:37:45 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:37:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:37:45 --> get_method_names called with term: 22
DEBUG - 2024-12-12 08:37:45 --> Returned methods: [{"idmethod":"00025","methodname":"2234"},{"idmethod":"00026","methodname":"2234"},{"idmethod":"00027","methodname":"2234"},{"idmethod":"00028","methodname":"2234"},{"idmethod":"00029","methodname":"2234"},{"idmethod":"00030","methodname":"2234"}]
ERROR - 2024-12-12 08:37:45 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 08:37:45 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 08:37:45 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 08:37:45 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 08:37:45 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 08:37:45 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
DEBUG - 2024-12-12 08:37:45 --> Total execution time: 0.0584
DEBUG - 2024-12-12 08:37:58 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:37:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:37:58 --> UPDATE `es_sampletestservice` SET `testvalue` = 'Test', `methodName` = '2234', `completetime` = '2024-12-12 08:37:58'
WHERE `id` = '903'
DEBUG - 2024-12-12 08:37:58 --> Total execution time: 0.0807
DEBUG - 2024-12-12 08:38:01 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:38:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:38:01 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-12 08:38:01 --> Total execution time: 0.0359
DEBUG - 2024-12-12 08:38:19 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:38:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:38:19 --> get_method_names called with term: 22
DEBUG - 2024-12-12 08:38:19 --> Returned methods: []
DEBUG - 2024-12-12 08:38:19 --> Total execution time: 0.0419
DEBUG - 2024-12-12 08:38:24 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:38:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:38:24 --> UPDATE `es_sampletestservice` SET `testvalue` = '22', `methodName` = '22', `completetime` = '2024-12-12 08:38:24'
WHERE `id` = '904'
DEBUG - 2024-12-12 08:38:24 --> Total execution time: 0.0822
DEBUG - 2024-12-12 08:38:26 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:38:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:38:26 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-12 08:38:26 --> Total execution time: 0.0577
DEBUG - 2024-12-12 08:38:30 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:38:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:38:30 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NOT NULL
 LIMIT 10
DEBUG - 2024-12-12 08:38:30 --> Total execution time: 0.0546
DEBUG - 2024-12-12 08:38:34 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:38:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:38:34 --> get_method_names called with term: 22
DEBUG - 2024-12-12 08:38:34 --> Returned methods: [{"idmethod":"00032","methodname":"22"}]
ERROR - 2024-12-12 08:38:34 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
DEBUG - 2024-12-12 08:38:34 --> Total execution time: 0.0532
DEBUG - 2024-12-12 08:38:39 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:38:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:38:39 --> UPDATE `es_sampletestservice` SET `testvalue` = 'Test', `methodName` = '22', `completetime` = '2024-12-12 08:38:39'
WHERE `id` = '903'
DEBUG - 2024-12-12 08:38:39 --> Total execution time: 0.0597
DEBUG - 2024-12-12 08:38:42 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:38:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:38:42 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NOT NULL
 LIMIT 10
DEBUG - 2024-12-12 08:38:42 --> Total execution time: 0.0442
DEBUG - 2024-12-12 08:38:58 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:38:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:38:58 --> Total execution time: 0.0450
DEBUG - 2024-12-12 08:39:00 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:39:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:39:00 --> Total execution time: 0.0611
DEBUG - 2024-12-12 08:39:00 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:39:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:39:00 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-12 08:39:00 --> Total execution time: 0.3423
DEBUG - 2024-12-12 08:39:11 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:39:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:39:11 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NOT NULL
 LIMIT 10
DEBUG - 2024-12-12 08:39:11 --> Total execution time: 0.0421
DEBUG - 2024-12-12 08:39:18 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:39:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:39:18 --> get_method_names called with term: 22
DEBUG - 2024-12-12 08:39:18 --> Returned methods: [{"idmethod":"00032","methodname":"22"},{"idmethod":"00033","methodname":"22"}]
ERROR - 2024-12-12 08:39:18 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
ERROR - 2024-12-12 08:39:18 --> Severity: Warning --> Undefined array key "id" C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 523
DEBUG - 2024-12-12 08:39:18 --> Total execution time: 0.0583
DEBUG - 2024-12-12 08:40:04 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:40:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:40:04 --> Total execution time: 0.0606
DEBUG - 2024-12-12 08:40:05 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:40:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:40:05 --> Total execution time: 0.0667
DEBUG - 2024-12-12 08:40:05 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:40:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:40:05 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-12 08:40:05 --> Total execution time: 0.3201
DEBUG - 2024-12-12 08:40:09 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:40:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:40:09 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NOT NULL
 LIMIT 10
DEBUG - 2024-12-12 08:40:09 --> Total execution time: 0.0562
DEBUG - 2024-12-12 08:40:13 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:40:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:40:13 --> get_method_names called with term: 22
DEBUG - 2024-12-12 08:40:13 --> Returned methods: [{"idmethod":"00032","methodname":"22"},{"idmethod":"00033","methodname":"22"}]
DEBUG - 2024-12-12 08:40:13 --> Total execution time: 0.0416
DEBUG - 2024-12-12 08:40:24 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:40:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:40:24 --> UPDATE `es_sampletestservice` SET `testvalue` = 'Test', `methodName` = '22', `completetime` = '2024-12-12 08:40:24'
WHERE `id` = '903'
DEBUG - 2024-12-12 08:40:24 --> Total execution time: 0.0556
DEBUG - 2024-12-12 08:40:27 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:40:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:40:27 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NOT NULL
 LIMIT 10
DEBUG - 2024-12-12 08:40:27 --> Total execution time: 0.0578
DEBUG - 2024-12-12 08:56:13 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:56:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:56:14 --> Total execution time: 0.0688
DEBUG - 2024-12-12 08:56:32 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:56:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:56:32 --> Total execution time: 0.0819
DEBUG - 2024-12-12 08:56:33 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:56:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:56:33 --> Total execution time: 0.0302
DEBUG - 2024-12-12 08:56:34 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:56:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:56:34 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-12 08:56:34 --> Total execution time: 0.1766
DEBUG - 2024-12-12 08:56:44 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:56:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:56:44 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NOT NULL
 LIMIT 10
DEBUG - 2024-12-12 08:56:44 --> Total execution time: 0.0539
DEBUG - 2024-12-12 08:57:07 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:57:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:57:07 --> Total execution time: 0.0366
DEBUG - 2024-12-12 08:57:08 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:57:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:57:08 --> Total execution time: 0.0539
DEBUG - 2024-12-12 08:57:09 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:57:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:57:09 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-12 08:57:09 --> Total execution time: 0.0400
DEBUG - 2024-12-12 08:57:18 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:57:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:57:18 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NOT NULL
 LIMIT 10
DEBUG - 2024-12-12 08:57:18 --> Total execution time: 0.0525
DEBUG - 2024-12-12 08:57:30 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:57:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:57:30 --> Total execution time: 0.0301
DEBUG - 2024-12-12 08:57:31 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:57:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:57:31 --> Total execution time: 0.0554
DEBUG - 2024-12-12 08:57:31 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:57:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:57:31 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-12 08:57:31 --> Total execution time: 0.1740
DEBUG - 2024-12-12 08:57:35 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:57:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:57:35 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NOT NULL
 LIMIT 10
DEBUG - 2024-12-12 08:57:35 --> Total execution time: 0.0538
DEBUG - 2024-12-12 08:58:14 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:58:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:58:14 --> Total execution time: 0.0822
DEBUG - 2024-12-12 08:58:15 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:58:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:58:15 --> Total execution time: 0.0375
DEBUG - 2024-12-12 08:58:15 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:58:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:58:15 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-12 08:58:15 --> Total execution time: 0.4031
DEBUG - 2024-12-12 08:58:23 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 08:58:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 08:58:23 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NOT NULL
 LIMIT 10
DEBUG - 2024-12-12 08:58:23 --> Total execution time: 0.0265
DEBUG - 2024-12-12 09:00:33 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:00:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:00:33 --> Total execution time: 0.0659
DEBUG - 2024-12-12 09:00:34 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:00:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:00:34 --> Total execution time: 0.0317
DEBUG - 2024-12-12 09:00:35 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:00:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:00:35 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-12 09:00:35 --> Total execution time: 0.1912
DEBUG - 2024-12-12 09:00:38 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:00:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:00:38 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NOT NULL
 LIMIT 10
DEBUG - 2024-12-12 09:00:38 --> Total execution time: 0.0533
DEBUG - 2024-12-12 09:01:15 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:01:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:01:15 --> Total execution time: 0.0496
DEBUG - 2024-12-12 09:01:16 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:01:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:01:16 --> Total execution time: 0.0562
DEBUG - 2024-12-12 09:01:16 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:01:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:01:17 --> Total execution time: 0.1573
DEBUG - 2024-12-12 09:01:39 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:01:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:01:39 --> Total execution time: 0.0309
DEBUG - 2024-12-12 09:01:40 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:01:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:01:40 --> Total execution time: 0.0563
DEBUG - 2024-12-12 09:01:40 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:01:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:01:41 --> Total execution time: 0.1585
DEBUG - 2024-12-12 09:01:43 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:01:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:01:43 --> Total execution time: 0.0520
DEBUG - 2024-12-12 09:01:44 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:01:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:01:44 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-12 09:01:44 --> Total execution time: 0.0616
DEBUG - 2024-12-12 09:01:50 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:01:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:01:50 --> UPDATE `es_sampletestservice` SET `confirmtime` = '2024-12-12 09:01:50', `userconfirm` = '001'
WHERE `id` = '903'
DEBUG - 2024-12-12 09:01:50 --> Total execution time: 0.0630
DEBUG - 2024-12-12 09:01:51 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:01:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:01:51 --> Total execution time: 0.0558
DEBUG - 2024-12-12 09:01:54 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:01:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:01:54 --> UPDATE `es_sampletestservice` SET `confirmtime` = '2024-12-12 09:01:54', `userconfirm` = '001'
WHERE `id` = '904'
DEBUG - 2024-12-12 09:01:54 --> Total execution time: 0.0391
DEBUG - 2024-12-12 09:01:55 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:01:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:01:55 --> Total execution time: 0.0440
DEBUG - 2024-12-12 09:02:00 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:02:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:02:00 --> Total execution time: 0.0488
DEBUG - 2024-12-12 09:02:01 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:02:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:02:01 --> Total execution time: 0.0784
DEBUG - 2024-12-12 09:02:01 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:02:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:02:01 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-12 09:02:01 --> Total execution time: 0.1872
DEBUG - 2024-12-12 09:02:03 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:02:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:02:03 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NOT NULL
 LIMIT 10
DEBUG - 2024-12-12 09:02:03 --> Total execution time: 0.0525
DEBUG - 2024-12-12 09:15:08 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:15:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:15:08 --> Total execution time: 0.0849
DEBUG - 2024-12-12 09:15:09 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:15:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:15:09 --> Total execution time: 0.0570
DEBUG - 2024-12-12 09:15:09 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:15:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:15:09 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-12 09:15:09 --> Total execution time: 0.2828
DEBUG - 2024-12-12 09:15:12 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:15:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:15:12 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NOT NULL
 LIMIT 10
DEBUG - 2024-12-12 09:15:12 --> Total execution time: 0.0538
DEBUG - 2024-12-12 09:15:23 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:15:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:15:23 --> get_method_names called with term: //
DEBUG - 2024-12-12 09:15:23 --> Returned methods: []
DEBUG - 2024-12-12 09:15:23 --> Total execution time: 0.0499
DEBUG - 2024-12-12 09:15:24 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:15:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:15:24 --> get_method_names called with term: 22
DEBUG - 2024-12-12 09:15:24 --> Returned methods: [{"idmethod":"00032","methodname":"22"},{"idmethod":"00033","methodname":"22"}]
DEBUG - 2024-12-12 09:15:24 --> Total execution time: 0.0507
DEBUG - 2024-12-12 09:15:29 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:15:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:15:29 --> UPDATE `es_sampletestservice` SET `testvalue` = 'Test', `methodName` = '22', `completetime` = '2024-12-12 09:15:29'
WHERE `id` = '903'
DEBUG - 2024-12-12 09:15:29 --> Total execution time: 0.0439
DEBUG - 2024-12-12 09:15:31 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:15:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:15:31 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NOT NULL
 LIMIT 10
DEBUG - 2024-12-12 09:15:31 --> Total execution time: 0.0543
DEBUG - 2024-12-12 09:23:07 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:23:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:23:07 --> Total execution time: 0.0513
DEBUG - 2024-12-12 09:23:08 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:23:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:23:08 --> Total execution time: 0.0556
DEBUG - 2024-12-12 09:23:08 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:23:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:23:08 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-12 09:23:08 --> Total execution time: 0.1270
DEBUG - 2024-12-12 09:23:12 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:23:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:23:12 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NOT NULL
 LIMIT 10
DEBUG - 2024-12-12 09:23:12 --> Total execution time: 0.0544
DEBUG - 2024-12-12 09:25:51 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:25:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:25:52 --> Total execution time: 0.0940
DEBUG - 2024-12-12 09:25:53 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:25:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:25:53 --> Total execution time: 0.0584
DEBUG - 2024-12-12 09:25:53 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:25:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:25:53 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-12 09:25:53 --> Total execution time: 0.2966
DEBUG - 2024-12-12 09:26:00 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:26:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:26:00 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NOT NULL
 LIMIT 10
DEBUG - 2024-12-12 09:26:00 --> Total execution time: 0.0388
DEBUG - 2024-12-12 09:26:48 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:26:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:26:48 --> Total execution time: 0.0807
DEBUG - 2024-12-12 09:26:49 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:26:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:26:49 --> Total execution time: 0.0299
DEBUG - 2024-12-12 09:26:49 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:26:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:26:50 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-12 09:26:50 --> Total execution time: 0.1866
DEBUG - 2024-12-12 09:26:53 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:26:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:26:53 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NOT NULL
 LIMIT 10
DEBUG - 2024-12-12 09:26:53 --> Total execution time: 0.0373
DEBUG - 2024-12-12 09:33:23 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:33:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:33:23 --> Total execution time: 0.1003
DEBUG - 2024-12-12 09:33:24 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:33:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:33:24 --> Total execution time: 0.0335
DEBUG - 2024-12-12 09:33:25 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:33:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:33:25 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-12 09:33:25 --> Total execution time: 0.2089
DEBUG - 2024-12-12 09:33:28 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:33:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:33:28 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NOT NULL
 LIMIT 10
DEBUG - 2024-12-12 09:33:28 --> Total execution time: 0.0370
DEBUG - 2024-12-12 09:34:04 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:34:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:34:04 --> Total execution time: 0.0687
DEBUG - 2024-12-12 09:34:05 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:34:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:34:05 --> Total execution time: 0.0277
DEBUG - 2024-12-12 09:34:06 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:34:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:34:06 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-12 09:34:06 --> Total execution time: 0.1567
DEBUG - 2024-12-12 09:34:09 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:34:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:34:09 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NOT NULL
 LIMIT 10
DEBUG - 2024-12-12 09:34:09 --> Total execution time: 0.0523
DEBUG - 2024-12-12 09:35:23 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:35:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:35:23 --> Total execution time: 0.0955
DEBUG - 2024-12-12 09:35:24 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:35:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:35:24 --> Total execution time: 0.0533
DEBUG - 2024-12-12 09:35:24 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:35:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:35:24 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-12 09:35:24 --> Total execution time: 0.0384
DEBUG - 2024-12-12 09:35:27 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:35:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:35:27 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NOT NULL
 LIMIT 10
DEBUG - 2024-12-12 09:35:27 --> Total execution time: 0.0522
DEBUG - 2024-12-12 09:35:49 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:35:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:35:50 --> Total execution time: 0.0517
DEBUG - 2024-12-12 09:35:50 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:35:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:35:50 --> Total execution time: 0.0526
DEBUG - 2024-12-12 09:35:51 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:35:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:35:51 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-12 09:35:51 --> Total execution time: 0.0527
DEBUG - 2024-12-12 09:35:54 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:35:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:35:54 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NOT NULL
 LIMIT 10
DEBUG - 2024-12-12 09:35:54 --> Total execution time: 0.0535
DEBUG - 2024-12-12 09:36:03 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:36:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:36:03 --> get_method_names called with term: 33
DEBUG - 2024-12-12 09:36:03 --> Returned methods: []
DEBUG - 2024-12-12 09:36:03 --> Total execution time: 0.0328
DEBUG - 2024-12-12 09:36:09 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:36:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:36:09 --> get_method_names called with term: 22
DEBUG - 2024-12-12 09:36:09 --> Returned methods: [{"idmethod":"00032","methodname":"22"},{"idmethod":"00033","methodname":"22"}]
DEBUG - 2024-12-12 09:36:09 --> Total execution time: 0.0309
DEBUG - 2024-12-12 09:36:13 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:36:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:36:13 --> get_method_names called with term: 356
DEBUG - 2024-12-12 09:36:13 --> Returned methods: []
DEBUG - 2024-12-12 09:36:13 --> Total execution time: 0.0524
DEBUG - 2024-12-12 09:37:13 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:37:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:37:14 --> Total execution time: 0.0743
DEBUG - 2024-12-12 09:37:14 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:37:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:37:14 --> Total execution time: 0.0340
DEBUG - 2024-12-12 09:37:15 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:37:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:37:15 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-12 09:37:15 --> Total execution time: 0.0581
DEBUG - 2024-12-12 09:37:18 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:37:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:37:18 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NOT NULL
 LIMIT 10
DEBUG - 2024-12-12 09:37:18 --> Total execution time: 0.0540
DEBUG - 2024-12-12 09:37:25 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:37:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:37:25 --> get_method_names called with term: Me
DEBUG - 2024-12-12 09:37:25 --> Returned methods: [{"idmethod":"00001","methodname":"Method 1"}]
DEBUG - 2024-12-12 09:37:25 --> Total execution time: 0.0321
DEBUG - 2024-12-12 09:37:30 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:37:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:37:30 --> UPDATE `es_sampletestservice` SET `testvalue` = 'Test', `methodName` = 'Method 1', `completetime` = '2024-12-12 09:37:30'
WHERE `id` = '903'
DEBUG - 2024-12-12 09:37:30 --> Total execution time: 0.0489
DEBUG - 2024-12-12 09:37:33 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:37:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:37:33 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NOT NULL
 LIMIT 10
DEBUG - 2024-12-12 09:37:33 --> Total execution time: 0.0524
DEBUG - 2024-12-12 09:37:41 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:37:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:37:41 --> Total execution time: 0.0499
DEBUG - 2024-12-12 09:37:42 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:37:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:37:42 --> Total execution time: 0.0672
DEBUG - 2024-12-12 09:37:43 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:37:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:37:43 --> Total execution time: 0.0352
DEBUG - 2024-12-12 09:37:46 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:37:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:37:46 --> Total execution time: 0.0524
DEBUG - 2024-12-12 09:37:47 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:37:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:37:47 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-12 09:37:47 --> Total execution time: 0.0534
DEBUG - 2024-12-12 09:37:59 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:37:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:37:59 --> UPDATE `es_sampletestservice` SET `confirmtime` = '2024-12-12 09:37:59', `userconfirm` = '001'
WHERE `id` = '903'
DEBUG - 2024-12-12 09:37:59 --> Total execution time: 0.0420
DEBUG - 2024-12-12 09:38:00 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:38:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:38:00 --> Total execution time: 0.0353
DEBUG - 2024-12-12 09:38:07 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:38:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:38:07 --> UPDATE `es_sampletestservice` SET `confirmtime` = '2024-12-12 09:38:07', `userconfirm` = '001'
WHERE `id` = '904'
DEBUG - 2024-12-12 09:38:07 --> Total execution time: 0.0521
DEBUG - 2024-12-12 09:38:08 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:38:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:38:08 --> Total execution time: 0.0529
DEBUG - 2024-12-12 09:40:30 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:40:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:40:30 --> Total execution time: 0.2138
DEBUG - 2024-12-12 09:40:31 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:40:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:40:31 --> Total execution time: 0.0559
DEBUG - 2024-12-12 09:40:31 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:40:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:40:31 --> Total execution time: 0.0403
DEBUG - 2024-12-12 09:40:33 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:40:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:40:33 --> Total execution time: 0.0517
DEBUG - 2024-12-12 09:40:35 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:40:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:40:35 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-12 09:40:35 --> Total execution time: 0.0514
DEBUG - 2024-12-12 09:40:37 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:40:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:40:37 --> UPDATE `es_sampletestservice` SET `confirmtime` = '2024-12-12 09:40:37', `userconfirm` = '001'
WHERE `id` = '903'
DEBUG - 2024-12-12 09:40:37 --> Total execution time: 0.0549
DEBUG - 2024-12-12 09:40:38 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:40:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:40:39 --> Total execution time: 0.0525
DEBUG - 2024-12-12 09:41:41 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:41:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:41:41 --> Total execution time: 0.1664
DEBUG - 2024-12-12 09:41:42 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:41:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:41:42 --> Total execution time: 0.0758
DEBUG - 2024-12-12 09:41:43 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:41:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:41:43 --> Total execution time: 0.0675
DEBUG - 2024-12-12 09:41:45 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:41:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:41:45 --> Total execution time: 0.0530
DEBUG - 2024-12-12 09:41:46 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:41:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:41:46 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-12 09:41:46 --> Total execution time: 0.0527
DEBUG - 2024-12-12 09:42:04 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:42:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:42:04 --> UPDATE `es_sampletestservice` SET `confirmtime` = '2024-12-12 09:42:04', `userconfirm` = '001'
WHERE `id` = '904'
DEBUG - 2024-12-12 09:42:04 --> Total execution time: 0.0569
DEBUG - 2024-12-12 09:42:05 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:42:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:42:05 --> Total execution time: 0.0538
DEBUG - 2024-12-12 09:42:18 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:42:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:42:18 --> Total execution time: 0.0498
DEBUG - 2024-12-12 09:42:19 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:42:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:42:19 --> Total execution time: 0.0353
DEBUG - 2024-12-12 09:42:19 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:42:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:42:19 --> Total execution time: 0.0548
DEBUG - 2024-12-12 09:42:22 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:42:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:42:22 --> Total execution time: 0.0502
DEBUG - 2024-12-12 09:42:22 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:42:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:42:22 --> Total execution time: 0.0531
DEBUG - 2024-12-12 09:42:23 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:42:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:42:23 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-12 09:42:23 --> Total execution time: 0.0617
DEBUG - 2024-12-12 09:42:26 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:42:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:42:26 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NOT NULL
 LIMIT 10
DEBUG - 2024-12-12 09:42:26 --> Total execution time: 0.0280
DEBUG - 2024-12-12 09:46:04 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:46:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:46:04 --> Total execution time: 0.0692
DEBUG - 2024-12-12 09:46:04 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:46:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:46:04 --> Total execution time: 0.0385
DEBUG - 2024-12-12 09:46:05 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:46:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:46:05 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-12 09:46:05 --> Total execution time: 0.0436
DEBUG - 2024-12-12 09:46:08 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:46:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:46:08 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NOT NULL
 LIMIT 10
DEBUG - 2024-12-12 09:46:08 --> Total execution time: 0.0531
DEBUG - 2024-12-12 09:46:19 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:46:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:46:19 --> Total execution time: 0.0519
DEBUG - 2024-12-12 09:46:20 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:46:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:46:20 --> Total execution time: 0.0555
DEBUG - 2024-12-12 09:46:20 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:46:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:46:20 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-12 09:46:20 --> Total execution time: 0.1196
DEBUG - 2024-12-12 09:46:28 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:46:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:46:28 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NOT NULL
 LIMIT 10
DEBUG - 2024-12-12 09:46:28 --> Total execution time: 0.0519
DEBUG - 2024-12-12 09:49:11 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:49:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:49:11 --> Total execution time: 0.1045
DEBUG - 2024-12-12 09:49:12 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:49:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:49:12 --> Total execution time: 0.0312
DEBUG - 2024-12-12 09:49:13 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:49:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:49:13 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-12 09:49:13 --> Total execution time: 0.1788
DEBUG - 2024-12-12 09:49:17 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:49:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:49:17 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NOT NULL
 LIMIT 10
DEBUG - 2024-12-12 09:49:17 --> Total execution time: 0.0532
DEBUG - 2024-12-12 09:50:28 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:50:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:50:28 --> Total execution time: 0.0719
DEBUG - 2024-12-12 09:50:29 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:50:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:50:29 --> Total execution time: 0.0261
DEBUG - 2024-12-12 09:50:30 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:50:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:50:30 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-12 09:50:30 --> Total execution time: 0.1122
DEBUG - 2024-12-12 09:50:34 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:50:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:50:34 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NOT NULL
 LIMIT 10
DEBUG - 2024-12-12 09:50:34 --> Total execution time: 0.0421
DEBUG - 2024-12-12 09:51:09 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:51:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:51:09 --> Total execution time: 0.0827
DEBUG - 2024-12-12 09:51:10 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:51:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:51:10 --> Total execution time: 0.0264
DEBUG - 2024-12-12 09:51:10 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:51:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:51:10 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-12 09:51:10 --> Total execution time: 0.1750
DEBUG - 2024-12-12 09:51:14 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:51:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:51:14 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NOT NULL
 LIMIT 10
DEBUG - 2024-12-12 09:51:14 --> Total execution time: 0.0540
DEBUG - 2024-12-12 09:51:20 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:51:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:51:20 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-12 09:51:20 --> Total execution time: 0.0559
DEBUG - 2024-12-12 09:51:28 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:51:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:51:28 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NOT NULL
 LIMIT 10
DEBUG - 2024-12-12 09:51:28 --> Total execution time: 0.0540
DEBUG - 2024-12-12 09:51:54 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:51:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:51:54 --> Total execution time: 0.0370
DEBUG - 2024-12-12 09:51:55 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:51:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:51:55 --> Total execution time: 0.0362
DEBUG - 2024-12-12 09:51:55 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:51:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:51:56 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-12 09:51:56 --> Total execution time: 0.2828
DEBUG - 2024-12-12 09:52:16 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:52:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:52:16 --> UPDATE `es_sampletestservice` SET `testvalue` = 'Test', `methodName` = 'Method 1', `completetime` = '2024-12-12 09:52:16'
WHERE `id` = '903'
DEBUG - 2024-12-12 09:52:16 --> Total execution time: 0.0656
DEBUG - 2024-12-12 09:52:19 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:52:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:52:19 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-12 09:52:19 --> Total execution time: 0.0376
DEBUG - 2024-12-12 09:52:22 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:52:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:52:22 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NOT NULL
 LIMIT 10
DEBUG - 2024-12-12 09:52:22 --> Total execution time: 0.0509
DEBUG - 2024-12-12 09:54:28 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:54:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:54:28 --> Total execution time: 0.0493
DEBUG - 2024-12-12 09:54:28 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:54:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:54:29 --> Total execution time: 0.0531
DEBUG - 2024-12-12 09:54:29 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:54:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:54:29 --> Total execution time: 0.0320
DEBUG - 2024-12-12 09:54:32 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:54:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:54:32 --> Total execution time: 0.0361
DEBUG - 2024-12-12 09:54:33 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:54:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:54:33 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-12 09:54:33 --> Total execution time: 0.0522
DEBUG - 2024-12-12 09:54:53 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:54:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:54:53 --> Total execution time: 0.0358
DEBUG - 2024-12-12 09:54:54 --> UTF-8 Support Enabled
DEBUG - 2024-12-12 09:54:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-12 09:54:54 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-12 09:54:54 --> Total execution time: 0.0518
