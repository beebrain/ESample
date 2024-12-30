<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2024-12-13 09:50:25 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 09:50:25 --> No URI present. Default controller set.
DEBUG - 2024-12-13 09:50:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 09:50:26 --> Total execution time: 1.7609
DEBUG - 2024-12-13 09:50:30 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 09:50:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 09:50:30 --> Total execution time: 0.1698
DEBUG - 2024-12-13 09:50:32 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 09:50:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 09:50:32 --> Total execution time: 0.1777
DEBUG - 2024-12-13 09:50:32 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 09:50:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 09:50:32 --> Total execution time: 0.1659
DEBUG - 2024-12-13 09:50:36 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 09:50:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 09:50:37 --> Total execution time: 0.1561
DEBUG - 2024-12-13 09:50:37 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 09:50:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 09:50:37 --> Total execution time: 0.0742
DEBUG - 2024-12-13 09:50:38 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 09:50:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 09:50:38 --> Total execution time: 0.1307
DEBUG - 2024-12-13 09:50:40 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 09:50:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 09:50:40 --> Total execution time: 0.1063
DEBUG - 2024-12-13 09:50:41 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 09:50:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 09:50:41 --> Total execution time: 0.0590
DEBUG - 2024-12-13 09:50:42 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 09:50:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 09:50:42 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-13 09:50:42 --> Total execution time: 0.0942
DEBUG - 2024-12-13 09:50:44 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 09:50:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 09:50:44 --> Total execution time: 0.0537
DEBUG - 2024-12-13 09:50:44 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 09:50:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 09:50:45 --> Total execution time: 0.0585
DEBUG - 2024-12-13 09:50:45 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 09:50:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 09:50:45 --> Total execution time: 0.0556
DEBUG - 2024-12-13 09:50:48 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 09:50:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 09:50:48 --> Total execution time: 0.0541
DEBUG - 2024-12-13 09:50:49 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 09:50:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 09:50:49 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-13 09:50:49 --> Total execution time: 0.0645
DEBUG - 2024-12-13 09:50:53 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 09:50:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 09:50:53 --> UPDATE `es_sampletestservice` SET `confirmtime` = '2024-12-13 09:50:53', `userconfirm` = '001'
WHERE `id` = '903'
DEBUG - 2024-12-13 09:50:53 --> Total execution time: 0.0538
DEBUG - 2024-12-13 09:50:54 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 09:50:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 09:50:55 --> Total execution time: 0.0428
DEBUG - 2024-12-13 09:51:32 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 09:51:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 09:51:32 --> Total execution time: 0.0364
DEBUG - 2024-12-13 09:51:32 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 09:51:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 09:51:32 --> Total execution time: 0.0695
DEBUG - 2024-12-13 09:51:33 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 09:51:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 09:51:33 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-13 09:51:33 --> Total execution time: 0.0574
DEBUG - 2024-12-13 09:51:42 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 09:51:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 09:51:42 --> UPDATE `es_sampletestservice` SET `testvalue` = '22', `methodName` = '22', `completetime` = '2024-12-13 09:51:42'
WHERE `id` = '904'
DEBUG - 2024-12-13 09:51:42 --> Total execution time: 0.0799
DEBUG - 2024-12-13 09:51:45 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 09:51:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 09:51:45 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-13 09:51:45 --> Total execution time: 0.0352
DEBUG - 2024-12-13 09:51:48 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 09:51:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 09:51:48 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NOT NULL
 LIMIT 10
DEBUG - 2024-12-13 09:51:48 --> Total execution time: 0.0568
DEBUG - 2024-12-13 09:51:53 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 09:51:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 09:51:53 --> Total execution time: 0.0514
DEBUG - 2024-12-13 09:51:53 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 09:51:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 09:51:53 --> Total execution time: 0.0481
DEBUG - 2024-12-13 09:51:54 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 09:51:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 09:51:54 --> Total execution time: 0.0602
DEBUG - 2024-12-13 09:51:56 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 09:51:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 09:51:56 --> Total execution time: 0.0394
DEBUG - 2024-12-13 09:51:57 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 09:51:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 09:51:57 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-13 09:51:57 --> Total execution time: 0.0552
DEBUG - 2024-12-13 09:52:01 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 09:52:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 09:52:01 --> UPDATE `es_sampletestservice` SET `confirmtime` = '2024-12-13 09:52:01', `userconfirm` = '001'
WHERE `id` = '904'
DEBUG - 2024-12-13 09:52:01 --> Total execution time: 0.0597
DEBUG - 2024-12-13 09:52:02 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 09:52:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 09:52:02 --> Total execution time: 0.0433
DEBUG - 2024-12-13 09:52:07 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 09:52:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 09:52:07 --> Total execution time: 0.1230
DEBUG - 2024-12-13 09:52:08 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 09:52:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 09:52:08 --> Total execution time: 0.0426
DEBUG - 2024-12-13 09:52:08 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 09:52:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 09:52:09 --> Total execution time: 0.0564
DEBUG - 2024-12-13 09:58:28 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 09:58:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 09:58:28 --> Total execution time: 0.2493
DEBUG - 2024-12-13 09:59:17 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 09:59:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 09:59:17 --> Total execution time: 0.1222
DEBUG - 2024-12-13 09:59:18 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 09:59:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 09:59:18 --> Total execution time: 0.0816
DEBUG - 2024-12-13 09:59:26 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 09:59:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 09:59:26 --> Total execution time: 0.0744
DEBUG - 2024-12-13 09:59:26 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 09:59:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 09:59:27 --> Total execution time: 0.0917
DEBUG - 2024-12-13 09:59:27 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 09:59:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 09:59:27 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-13 09:59:27 --> Total execution time: 0.0645
DEBUG - 2024-12-13 09:59:30 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 09:59:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 09:59:31 --> Total execution time: 0.0725
DEBUG - 2024-12-13 09:59:31 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 09:59:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 09:59:31 --> Total execution time: 0.0633
DEBUG - 2024-12-13 09:59:32 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 09:59:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 09:59:32 --> Total execution time: 0.0777
DEBUG - 2024-12-13 10:02:09 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 10:02:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 10:02:09 --> Total execution time: 0.0549
DEBUG - 2024-12-13 10:02:09 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 10:02:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 10:02:09 --> Total execution time: 0.0423
DEBUG - 2024-12-13 10:02:10 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 10:02:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 10:02:10 --> Total execution time: 0.0403
DEBUG - 2024-12-13 10:02:13 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 10:02:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 10:02:13 --> Total execution time: 0.0549
DEBUG - 2024-12-13 10:02:14 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 10:02:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 10:02:14 --> Total execution time: 0.0626
DEBUG - 2024-12-13 10:02:14 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 10:02:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 10:02:14 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-13 10:02:14 --> Total execution time: 0.0610
DEBUG - 2024-12-13 10:02:16 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 10:02:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 10:02:16 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NOT NULL
 LIMIT 10
DEBUG - 2024-12-13 10:02:16 --> Total execution time: 0.0601
DEBUG - 2024-12-13 10:03:35 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 10:03:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 10:03:35 --> Total execution time: 0.0658
DEBUG - 2024-12-13 10:03:36 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 10:03:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 10:03:36 --> Total execution time: 0.0594
DEBUG - 2024-12-13 10:03:37 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 10:03:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 10:03:37 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-13 10:03:37 --> Total execution time: 0.0485
DEBUG - 2024-12-13 10:03:45 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 10:03:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 10:03:45 --> get_method_names called with term: 22
DEBUG - 2024-12-13 10:03:45 --> Returned methods: [{"idmethod":"00032","methodname":"22"},{"idmethod":"00033","methodname":"22"},{"idmethod":"00035","methodname":"22"}]
DEBUG - 2024-12-13 10:03:45 --> Total execution time: 0.0396
DEBUG - 2024-12-13 10:03:49 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 10:03:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 10:03:49 --> UPDATE `es_sampletestservice` SET `testvalue` = '11', `methodName` = '22', `completetime` = '2024-12-13 10:03:49'
WHERE `id` = '903'
DEBUG - 2024-12-13 10:03:49 --> Total execution time: 0.0494
DEBUG - 2024-12-13 10:03:52 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 10:03:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 10:03:52 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-13 10:03:52 --> Total execution time: 0.0343
DEBUG - 2024-12-13 10:03:59 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 10:03:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 10:04:00 --> get_method_names called with term: Te
DEBUG - 2024-12-13 10:04:00 --> Returned methods: []
DEBUG - 2024-12-13 10:04:00 --> Total execution time: 0.0370
DEBUG - 2024-12-13 10:04:00 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 10:04:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 10:04:00 --> get_method_names called with term: Test
DEBUG - 2024-12-13 10:04:00 --> Returned methods: []
DEBUG - 2024-12-13 10:04:00 --> Total execution time: 0.0402
DEBUG - 2024-12-13 10:04:03 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 10:04:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 10:04:04 --> UPDATE `es_sampletestservice` SET `testvalue` = '131', `methodName` = 'Test', `completetime` = '2024-12-13 10:04:04'
WHERE `id` = '904'
DEBUG - 2024-12-13 10:04:04 --> Total execution time: 0.0512
DEBUG - 2024-12-13 10:04:06 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 10:04:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 10:04:06 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-13 10:04:06 --> Total execution time: 0.0582
DEBUG - 2024-12-13 10:04:10 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 10:04:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 10:04:10 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NOT NULL
 LIMIT 10
DEBUG - 2024-12-13 10:04:10 --> Total execution time: 0.0497
DEBUG - 2024-12-13 10:04:15 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 10:04:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 10:04:15 --> Total execution time: 0.0519
DEBUG - 2024-12-13 10:04:16 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 10:04:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 10:04:16 --> Total execution time: 0.0697
DEBUG - 2024-12-13 10:04:16 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 10:04:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 10:04:16 --> Total execution time: 0.0592
DEBUG - 2024-12-13 10:04:21 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 10:04:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 10:04:23 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 10:04:23 --> Global POST, GET and COOKIE data sanitized
ERROR - 2024-12-13 10:04:23 --> Severity: 8192 --> Return type of Google_Model::offsetExists($offset) should either be compatible with ArrayAccess::offsetExists(mixed $offset): bool, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice C:\xampp\htdocs\ESample\application\libraries\vendor\google\apiclient\src\Google\Model.php 249
ERROR - 2024-12-13 10:04:23 --> Severity: 8192 --> Return type of Google_Model::offsetGet($offset) should either be compatible with ArrayAccess::offsetGet(mixed $offset): mixed, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice C:\xampp\htdocs\ESample\application\libraries\vendor\google\apiclient\src\Google\Model.php 254
ERROR - 2024-12-13 10:04:23 --> Severity: 8192 --> Return type of Google_Model::offsetSet($offset, $value) should either be compatible with ArrayAccess::offsetSet(mixed $offset, mixed $value): void, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice C:\xampp\htdocs\ESample\application\libraries\vendor\google\apiclient\src\Google\Model.php 261
ERROR - 2024-12-13 10:04:23 --> Severity: 8192 --> Return type of Google_Model::offsetUnset($offset) should either be compatible with ArrayAccess::offsetUnset(mixed $offset): void, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice C:\xampp\htdocs\ESample\application\libraries\vendor\google\apiclient\src\Google\Model.php 271
ERROR - 2024-12-13 10:04:23 --> Severity: 8192 --> Return type of Google_Collection::current() should either be compatible with Iterator::current(): mixed, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice C:\xampp\htdocs\ESample\application\libraries\vendor\google\apiclient\src\Google\Collection.php 24
ERROR - 2024-12-13 10:04:23 --> Severity: 8192 --> Return type of Google_Collection::next() should either be compatible with Iterator::next(): void, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice C:\xampp\htdocs\ESample\application\libraries\vendor\google\apiclient\src\Google\Collection.php 40
ERROR - 2024-12-13 10:04:23 --> Severity: 8192 --> Return type of Google_Collection::key() should either be compatible with Iterator::key(): mixed, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice C:\xampp\htdocs\ESample\application\libraries\vendor\google\apiclient\src\Google\Collection.php 32
ERROR - 2024-12-13 10:04:23 --> Severity: 8192 --> Return type of Google_Collection::valid() should either be compatible with Iterator::valid(): bool, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice C:\xampp\htdocs\ESample\application\libraries\vendor\google\apiclient\src\Google\Collection.php 45
ERROR - 2024-12-13 10:04:23 --> Severity: 8192 --> Return type of Google_Collection::rewind() should either be compatible with Iterator::rewind(): void, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice C:\xampp\htdocs\ESample\application\libraries\vendor\google\apiclient\src\Google\Collection.php 16
ERROR - 2024-12-13 10:04:23 --> Severity: 8192 --> Return type of Google_Collection::count() should either be compatible with Countable::count(): int, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice C:\xampp\htdocs\ESample\application\libraries\vendor\google\apiclient\src\Google\Collection.php 51
DEBUG - 2024-12-13 10:04:23 --> Total execution time: 0.1321
DEBUG - 2024-12-13 10:04:33 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 10:04:33 --> Global POST, GET and COOKIE data sanitized
ERROR - 2024-12-13 10:04:33 --> Severity: 8192 --> Return type of Google_Model::offsetExists($offset) should either be compatible with ArrayAccess::offsetExists(mixed $offset): bool, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice C:\xampp\htdocs\ESample\application\libraries\vendor\google\apiclient\src\Google\Model.php 249
ERROR - 2024-12-13 10:04:33 --> Severity: 8192 --> Return type of Google_Model::offsetGet($offset) should either be compatible with ArrayAccess::offsetGet(mixed $offset): mixed, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice C:\xampp\htdocs\ESample\application\libraries\vendor\google\apiclient\src\Google\Model.php 254
ERROR - 2024-12-13 10:04:33 --> Severity: 8192 --> Return type of Google_Model::offsetSet($offset, $value) should either be compatible with ArrayAccess::offsetSet(mixed $offset, mixed $value): void, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice C:\xampp\htdocs\ESample\application\libraries\vendor\google\apiclient\src\Google\Model.php 261
ERROR - 2024-12-13 10:04:33 --> Severity: 8192 --> Return type of Google_Model::offsetUnset($offset) should either be compatible with ArrayAccess::offsetUnset(mixed $offset): void, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice C:\xampp\htdocs\ESample\application\libraries\vendor\google\apiclient\src\Google\Model.php 271
ERROR - 2024-12-13 10:04:33 --> Severity: 8192 --> Return type of Google_Collection::current() should either be compatible with Iterator::current(): mixed, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice C:\xampp\htdocs\ESample\application\libraries\vendor\google\apiclient\src\Google\Collection.php 24
ERROR - 2024-12-13 10:04:33 --> Severity: 8192 --> Return type of Google_Collection::next() should either be compatible with Iterator::next(): void, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice C:\xampp\htdocs\ESample\application\libraries\vendor\google\apiclient\src\Google\Collection.php 40
ERROR - 2024-12-13 10:04:33 --> Severity: 8192 --> Return type of Google_Collection::key() should either be compatible with Iterator::key(): mixed, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice C:\xampp\htdocs\ESample\application\libraries\vendor\google\apiclient\src\Google\Collection.php 32
ERROR - 2024-12-13 10:04:33 --> Severity: 8192 --> Return type of Google_Collection::valid() should either be compatible with Iterator::valid(): bool, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice C:\xampp\htdocs\ESample\application\libraries\vendor\google\apiclient\src\Google\Collection.php 45
ERROR - 2024-12-13 10:04:33 --> Severity: 8192 --> Return type of Google_Collection::rewind() should either be compatible with Iterator::rewind(): void, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice C:\xampp\htdocs\ESample\application\libraries\vendor\google\apiclient\src\Google\Collection.php 16
ERROR - 2024-12-13 10:04:33 --> Severity: 8192 --> Return type of Google_Collection::count() should either be compatible with Countable::count(): int, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice C:\xampp\htdocs\ESample\application\libraries\vendor\google\apiclient\src\Google\Collection.php 51
DEBUG - 2024-12-13 10:04:33 --> Total execution time: 0.0941
DEBUG - 2024-12-13 10:04:34 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 10:04:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 10:04:35 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 10:04:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 10:04:35 --> Total execution time: 0.0448
DEBUG - 2024-12-13 10:04:41 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 10:04:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 10:04:41 --> Total execution time: 0.0336
DEBUG - 2024-12-13 10:04:42 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 10:04:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 10:04:42 --> Total execution time: 0.0551
DEBUG - 2024-12-13 10:04:43 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 10:04:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 10:04:43 --> Total execution time: 0.0748
DEBUG - 2024-12-13 10:04:47 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 10:04:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 10:04:47 --> Total execution time: 0.0540
DEBUG - 2024-12-13 10:04:47 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 10:04:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 10:04:48 --> Total execution time: 0.0561
DEBUG - 2024-12-13 10:04:48 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 10:04:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 10:04:48 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '003'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-13 10:04:48 --> Total execution time: 0.0420
DEBUG - 2024-12-13 10:04:52 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 10:04:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 10:04:52 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '003'
AND `sts`.`completetime` IS NOT NULL
 LIMIT 10
DEBUG - 2024-12-13 10:04:52 --> Total execution time: 0.0446
DEBUG - 2024-12-13 10:04:55 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 10:04:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 10:04:55 --> Total execution time: 0.0356
DEBUG - 2024-12-13 10:04:55 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 10:04:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 10:04:55 --> Total execution time: 0.0582
DEBUG - 2024-12-13 10:04:56 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 10:04:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 10:04:56 --> Total execution time: 0.0470
DEBUG - 2024-12-13 10:04:58 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 10:04:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 10:04:58 --> Total execution time: 0.0423
DEBUG - 2024-12-13 10:05:00 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 10:05:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 10:05:00 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-13 10:05:00 --> Total execution time: 0.0388
DEBUG - 2024-12-13 10:05:16 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 10:05:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 10:05:16 --> UPDATE `es_sampletestservice` SET `confirmtime` = '2024-12-13 10:05:16', `userconfirm` = '003'
WHERE `id` = '903'
DEBUG - 2024-12-13 10:05:16 --> Total execution time: 0.0446
DEBUG - 2024-12-13 10:05:17 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 10:05:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 10:05:17 --> Total execution time: 0.0571
DEBUG - 2024-12-13 10:05:20 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 10:05:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 10:05:21 --> UPDATE `es_sampletestservice` SET `confirmtime` = '2024-12-13 10:05:21', `userconfirm` = '003'
WHERE `id` = '904'
DEBUG - 2024-12-13 10:05:21 --> Total execution time: 0.0515
DEBUG - 2024-12-13 10:05:22 --> UTF-8 Support Enabled
DEBUG - 2024-12-13 10:05:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-13 10:05:22 --> Total execution time: 0.0443
