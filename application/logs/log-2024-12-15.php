<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2024-12-15 04:14:44 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 04:14:44 --> No URI present. Default controller set.
DEBUG - 2024-12-15 04:14:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 04:14:45 --> Total execution time: 1.3971
DEBUG - 2024-12-15 04:14:51 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 04:14:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 04:14:51 --> Total execution time: 0.1139
DEBUG - 2024-12-15 04:14:52 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 04:14:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 04:14:53 --> Total execution time: 0.0874
DEBUG - 2024-12-15 04:14:53 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 04:14:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 04:14:53 --> Total execution time: 0.1217
DEBUG - 2024-12-15 05:27:47 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 05:27:47 --> No URI present. Default controller set.
DEBUG - 2024-12-15 05:27:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 05:27:47 --> Total execution time: 0.0324
DEBUG - 2024-12-15 05:27:51 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 05:27:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 05:27:51 --> Total execution time: 0.0196
DEBUG - 2024-12-15 05:27:52 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 05:27:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 05:27:52 --> Total execution time: 0.0380
DEBUG - 2024-12-15 05:27:53 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 05:27:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 05:27:53 --> Total execution time: 0.0296
DEBUG - 2024-12-15 05:27:57 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 05:27:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 05:27:57 --> Total execution time: 0.1569
DEBUG - 2024-12-15 05:27:58 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 05:27:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 05:27:58 --> Total execution time: 0.0353
DEBUG - 2024-12-15 05:27:59 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 05:27:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 05:27:59 --> Total execution time: 0.0711
DEBUG - 2024-12-15 05:28:02 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 05:28:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 05:28:03 --> Total execution time: 0.0360
DEBUG - 2024-12-15 05:28:03 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 05:28:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 05:28:03 --> Total execution time: 0.0355
DEBUG - 2024-12-15 05:28:04 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 05:28:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 05:28:04 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-15 05:28:04 --> Total execution time: 0.0686
DEBUG - 2024-12-15 05:28:07 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 05:28:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 05:28:07 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NOT NULL
 LIMIT 10
DEBUG - 2024-12-15 05:28:07 --> Total execution time: 0.0539
DEBUG - 2024-12-15 05:28:16 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 05:28:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 05:28:17 --> Total execution time: 0.0339
DEBUG - 2024-12-15 05:28:17 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 05:28:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 05:28:17 --> Total execution time: 0.0215
DEBUG - 2024-12-15 05:28:18 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 05:28:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 05:28:18 --> Total execution time: 0.0224
DEBUG - 2024-12-15 05:28:31 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 05:28:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 05:28:31 --> Total execution time: 0.0183
DEBUG - 2024-12-15 05:28:31 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 05:28:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 05:28:31 --> Total execution time: 0.0275
DEBUG - 2024-12-15 05:28:32 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 05:28:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 05:28:32 --> Total execution time: 0.0214
DEBUG - 2024-12-15 05:28:37 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 05:28:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 05:28:37 --> Total execution time: 0.0197
DEBUG - 2024-12-15 08:05:40 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 08:05:45 --> No URI present. Default controller set.
DEBUG - 2024-12-15 08:05:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 08:05:46 --> Total execution time: 11.3885
DEBUG - 2024-12-15 08:06:16 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 08:06:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 08:06:16 --> Total execution time: 0.2054
DEBUG - 2024-12-15 08:06:18 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 08:06:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 08:06:18 --> Total execution time: 0.0511
DEBUG - 2024-12-15 08:06:19 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 08:06:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 08:06:19 --> Total execution time: 0.0728
DEBUG - 2024-12-15 08:07:33 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 08:07:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 08:07:33 --> Total execution time: 0.0472
DEBUG - 2024-12-15 08:07:34 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 08:07:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 08:07:34 --> Total execution time: 0.0533
DEBUG - 2024-12-15 08:07:35 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 08:07:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 08:07:35 --> Total execution time: 0.0329
DEBUG - 2024-12-15 08:17:47 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 08:17:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 08:17:47 --> Total execution time: 0.0545
DEBUG - 2024-12-15 08:17:48 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 08:17:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 08:17:48 --> Total execution time: 0.0418
DEBUG - 2024-12-15 08:17:49 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 08:17:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 08:17:49 --> Total execution time: 0.0283
DEBUG - 2024-12-15 08:17:52 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 08:17:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 08:17:52 --> Total execution time: 0.0309
DEBUG - 2024-12-15 08:17:52 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 08:17:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 08:17:52 --> Total execution time: 0.0601
DEBUG - 2024-12-15 08:17:53 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 08:17:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 08:17:53 --> Total execution time: 0.0386
DEBUG - 2024-12-15 08:18:05 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 08:18:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 08:18:05 --> Total execution time: 0.0497
DEBUG - 2024-12-15 08:18:05 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 08:18:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 08:18:05 --> Total execution time: 0.0536
DEBUG - 2024-12-15 08:18:06 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 08:18:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 08:18:06 --> Total execution time: 0.0502
DEBUG - 2024-12-15 08:18:13 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 08:18:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 08:18:13 --> Total execution time: 0.0418
DEBUG - 2024-12-15 08:18:14 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 08:18:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 08:18:14 --> Total execution time: 0.0517
DEBUG - 2024-12-15 08:18:14 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 08:18:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 08:18:14 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-15 08:18:14 --> Total execution time: 0.0478
DEBUG - 2024-12-15 08:18:18 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 08:18:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 08:18:18 --> Total execution time: 0.0492
DEBUG - 2024-12-15 08:18:18 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 08:18:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 08:18:18 --> Total execution time: 0.0281
DEBUG - 2024-12-15 08:18:19 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 08:18:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 08:18:19 --> Total execution time: 0.0373
DEBUG - 2024-12-15 08:19:11 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 08:19:11 --> No URI present. Default controller set.
DEBUG - 2024-12-15 08:19:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 08:19:12 --> Total execution time: 0.0681
DEBUG - 2024-12-15 08:19:25 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 08:19:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 08:19:25 --> Total execution time: 0.0556
DEBUG - 2024-12-15 08:19:27 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 08:19:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 08:19:27 --> Total execution time: 0.0389
DEBUG - 2024-12-15 08:19:27 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 08:19:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 08:19:27 --> Total execution time: 0.0306
DEBUG - 2024-12-15 08:19:31 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 08:19:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 08:19:31 --> Total execution time: 0.0498
DEBUG - 2024-12-15 08:19:32 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 08:19:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 08:19:32 --> Total execution time: 0.0545
DEBUG - 2024-12-15 08:19:33 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 08:19:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 08:19:33 --> Total execution time: 0.0379
DEBUG - 2024-12-15 08:21:27 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 08:21:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 08:21:27 --> Total execution time: 0.0275
DEBUG - 2024-12-15 08:21:29 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 08:21:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 08:21:29 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-15 08:21:29 --> Total execution time: 0.0646
DEBUG - 2024-12-15 08:21:50 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 08:21:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 08:21:50 --> Total execution time: 0.0498
DEBUG - 2024-12-15 08:21:51 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 08:21:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 08:21:51 --> Total execution time: 0.0388
DEBUG - 2024-12-15 08:21:52 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 08:21:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 08:21:52 --> Total execution time: 0.0524
DEBUG - 2024-12-15 08:21:55 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 08:21:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 08:21:55 --> Total execution time: 0.0289
DEBUG - 2024-12-15 08:21:57 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 08:21:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 08:21:57 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-15 08:21:57 --> Total execution time: 0.0324
DEBUG - 2024-12-15 08:22:39 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 08:22:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 08:22:39 --> Total execution time: 0.0292
DEBUG - 2024-12-15 08:22:40 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 08:22:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 08:22:40 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-15 08:22:40 --> Total execution time: 0.0388
DEBUG - 2024-12-15 08:23:28 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 08:23:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 08:23:28 --> Total execution time: 0.0522
DEBUG - 2024-12-15 08:23:29 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 08:23:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 08:23:29 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-15 08:23:29 --> Total execution time: 0.0364
DEBUG - 2024-12-15 08:23:45 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 08:23:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 08:23:45 --> Total execution time: 0.0246
DEBUG - 2024-12-15 08:23:46 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 08:23:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 08:23:46 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-15 08:23:46 --> Total execution time: 0.0523
DEBUG - 2024-12-15 08:25:19 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 08:25:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 08:25:19 --> Total execution time: 0.1028
DEBUG - 2024-12-15 08:25:19 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 08:25:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 08:25:19 --> Total execution time: 0.0387
DEBUG - 2024-12-15 08:25:20 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 08:25:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 08:25:20 --> Total execution time: 0.0395
DEBUG - 2024-12-15 08:25:25 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 08:25:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 08:25:25 --> Total execution time: 0.0289
DEBUG - 2024-12-15 08:25:26 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 08:25:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 08:25:26 --> Total execution time: 0.0523
DEBUG - 2024-12-15 08:25:26 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 08:25:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 08:25:26 --> Total execution time: 0.0513
DEBUG - 2024-12-15 08:25:29 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 08:25:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 08:25:29 --> Total execution time: 0.0558
DEBUG - 2024-12-15 08:25:30 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 08:25:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 08:25:31 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-15 08:25:31 --> Total execution time: 0.0342
DEBUG - 2024-12-15 09:02:44 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 09:02:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 09:02:44 --> Total execution time: 0.1703
DEBUG - 2024-12-15 09:02:45 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 09:02:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 09:02:45 --> Total execution time: 0.0457
DEBUG - 2024-12-15 09:02:45 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 09:02:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 09:02:45 --> Total execution time: 0.0739
DEBUG - 2024-12-15 09:02:49 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 09:02:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 09:02:49 --> Total execution time: 0.0321
DEBUG - 2024-12-15 09:02:50 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 09:02:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 09:02:50 --> Total execution time: 0.0628
DEBUG - 2024-12-15 09:02:50 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 09:02:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 09:02:50 --> Total execution time: 0.0298
DEBUG - 2024-12-15 09:02:52 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 09:02:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 09:02:53 --> Total execution time: 0.0375
DEBUG - 2024-12-15 09:02:54 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 09:02:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 09:02:54 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-15 09:02:54 --> Total execution time: 0.0360
DEBUG - 2024-12-15 09:05:05 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 09:05:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 09:05:06 --> Total execution time: 0.0805
DEBUG - 2024-12-15 09:05:06 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 09:05:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 09:05:06 --> Total execution time: 0.0297
DEBUG - 2024-12-15 09:05:07 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 09:05:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 09:05:07 --> Total execution time: 0.0357
DEBUG - 2024-12-15 09:05:08 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 09:05:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 09:05:08 --> Total execution time: 0.0544
DEBUG - 2024-12-15 09:05:09 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 09:05:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 09:05:09 --> Total execution time: 0.0567
DEBUG - 2024-12-15 09:05:09 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 09:05:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 09:05:09 --> Total execution time: 0.2968
DEBUG - 2024-12-15 09:05:13 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 09:05:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 09:05:13 --> Total execution time: 0.0501
DEBUG - 2024-12-15 09:05:14 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 09:05:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 09:05:14 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-15 09:05:14 --> Total execution time: 0.0683
DEBUG - 2024-12-15 09:06:08 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 09:06:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 09:06:08 --> Total execution time: 0.0326
DEBUG - 2024-12-15 09:06:08 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 09:06:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 09:06:08 --> Total execution time: 0.0398
DEBUG - 2024-12-15 09:06:09 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 09:06:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 09:06:09 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-15 09:06:09 --> Total execution time: 0.0352
DEBUG - 2024-12-15 09:06:15 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 09:06:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 09:06:16 --> UPDATE `es_sampletestservice` SET `testvalue` = '11', `methodName` = '22', `completetime` = '2024-12-15 09:06:16'
WHERE `id` = '903'
DEBUG - 2024-12-15 09:06:16 --> Total execution time: 0.0612
DEBUG - 2024-12-15 09:06:18 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 09:06:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 09:06:18 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-15 09:06:18 --> Total execution time: 0.0293
DEBUG - 2024-12-15 09:06:23 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 09:06:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 09:06:23 --> UPDATE `es_sampletestservice` SET `testvalue` = '131', `methodName` = 'Test', `completetime` = '2024-12-15 09:06:23'
WHERE `id` = '904'
DEBUG - 2024-12-15 09:06:23 --> Total execution time: 0.0424
DEBUG - 2024-12-15 09:06:26 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 09:06:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 09:06:26 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-15 09:06:26 --> Total execution time: 0.0537
DEBUG - 2024-12-15 09:24:53 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 09:24:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 09:24:53 --> Total execution time: 0.0577
DEBUG - 2024-12-15 09:24:53 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 09:24:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 09:24:53 --> Total execution time: 0.0568
DEBUG - 2024-12-15 09:24:54 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 09:24:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 09:24:54 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-15 09:24:54 --> Total execution time: 0.0541
DEBUG - 2024-12-15 09:25:01 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 09:25:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 09:25:01 --> Total execution time: 0.0344
DEBUG - 2024-12-15 09:25:02 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 09:25:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 09:25:02 --> Total execution time: 0.0228
DEBUG - 2024-12-15 09:25:02 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 09:25:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 09:25:02 --> Total execution time: 0.2194
DEBUG - 2024-12-15 09:25:39 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 09:25:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 09:25:39 --> Total execution time: 0.0556
DEBUG - 2024-12-15 09:25:39 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 09:25:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 09:25:40 --> Total execution time: 0.0327
DEBUG - 2024-12-15 09:25:40 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 09:25:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 09:25:40 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-15 09:25:40 --> Total execution time: 0.0523
DEBUG - 2024-12-15 09:25:53 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 09:25:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 09:25:53 --> UPDATE `es_sampletestservice` SET `testvalue` = '11', `methodName` = '22', `completetime` = '2024-12-15 09:25:53'
WHERE `id` = '903'
DEBUG - 2024-12-15 09:25:53 --> Total execution time: 0.0977
DEBUG - 2024-12-15 09:25:56 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 09:25:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 09:25:56 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-15 09:25:56 --> Total execution time: 0.0670
DEBUG - 2024-12-15 09:26:05 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 09:26:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 09:26:05 --> Total execution time: 0.0549
DEBUG - 2024-12-15 09:26:06 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 09:26:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 09:26:06 --> Total execution time: 0.0304
DEBUG - 2024-12-15 09:26:06 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 09:26:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 09:26:07 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-15 09:26:07 --> Total execution time: 0.2637
DEBUG - 2024-12-15 09:26:37 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 09:26:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 09:26:38 --> UPDATE `es_sampletestservice` SET `testvalue` = '11', `methodName` = '22', `completetime` = '2024-12-15 09:26:38'
WHERE `id` = '903'
DEBUG - 2024-12-15 09:26:38 --> Total execution time: 0.0457
DEBUG - 2024-12-15 09:26:50 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 09:26:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 09:26:50 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-15 09:26:50 --> Total execution time: 0.0597
DEBUG - 2024-12-15 09:29:04 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 09:29:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 09:29:04 --> Total execution time: 0.0487
DEBUG - 2024-12-15 09:29:05 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 09:29:05 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 09:29:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 09:29:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 09:29:05 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '002'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-15 09:29:05 --> Total execution time: 0.0609
DEBUG - 2024-12-15 09:29:05 --> Total execution time: 0.0809
DEBUG - 2024-12-15 09:29:08 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 09:29:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 09:29:13 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '002'
AND `sts`.`completetime` IS NOT NULL
 LIMIT 10
DEBUG - 2024-12-15 09:29:13 --> Total execution time: 4.8364
DEBUG - 2024-12-15 09:29:25 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 09:29:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 09:29:25 --> Total execution time: 0.0491
DEBUG - 2024-12-15 09:29:26 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 09:29:26 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 09:29:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 09:29:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 09:29:26 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-15 09:29:26 --> Total execution time: 0.0338
DEBUG - 2024-12-15 09:29:26 --> Total execution time: 0.0656
DEBUG - 2024-12-15 09:29:41 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 09:29:41 --> Global POST, GET and COOKIE data sanitized
ERROR - 2024-12-15 09:30:02 --> Severity: Warning --> Undefined property: samplecontrol::$add_new_method C:\xampp\htdocs\ESample\system\core\Model.php 74
DEBUG - 2024-12-15 09:30:53 --> UPDATE `es_sampletestservice` SET `testvalue` = '11', `methodName` = '22', `completetime` = '2024-12-15 09:30:32'
WHERE `id` = '903'
DEBUG - 2024-12-15 09:31:46 --> Total execution time: 124.4588
DEBUG - 2024-12-15 09:31:57 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 09:31:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 09:32:05 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-15 09:32:05 --> Total execution time: 7.1173
DEBUG - 2024-12-15 09:32:33 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 09:32:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 09:32:33 --> UPDATE `es_sampletestservice` SET `testvalue` = '131', `methodName` = 'Test', `completetime` = '2024-12-15 09:32:33'
WHERE `id` = '904'
DEBUG - 2024-12-15 09:32:33 --> Total execution time: 0.0366
DEBUG - 2024-12-15 09:32:36 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 09:32:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 09:32:36 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-15 09:32:36 --> Total execution time: 0.0545
DEBUG - 2024-12-15 09:32:41 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 09:32:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 09:32:41 --> Total execution time: 0.0546
DEBUG - 2024-12-15 09:32:42 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 09:32:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 09:32:42 --> Total execution time: 0.0468
DEBUG - 2024-12-15 09:32:42 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 09:32:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 09:32:42 --> Total execution time: 0.0578
DEBUG - 2024-12-15 09:32:46 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 09:32:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 09:32:46 --> Total execution time: 0.0394
DEBUG - 2024-12-15 09:32:47 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 09:32:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 09:32:47 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-15 09:32:47 --> Total execution time: 0.0562
DEBUG - 2024-12-15 09:32:54 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 09:32:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 09:32:54 --> Total execution time: 0.0421
DEBUG - 2024-12-15 09:32:55 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 09:32:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 09:32:55 --> Total execution time: 0.0360
DEBUG - 2024-12-15 09:32:56 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 09:32:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 09:32:56 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '002'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-15 09:32:56 --> Total execution time: 0.1265
DEBUG - 2024-12-15 09:33:04 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 09:33:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 09:33:04 --> Total execution time: 0.0551
DEBUG - 2024-12-15 09:33:05 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 09:33:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 09:33:05 --> Total execution time: 0.0372
DEBUG - 2024-12-15 09:33:05 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 09:33:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 09:33:05 --> Total execution time: 0.1611
DEBUG - 2024-12-15 09:36:10 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 09:36:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 09:36:10 --> Total execution time: 0.0379
DEBUG - 2024-12-15 09:36:11 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 09:36:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 09:36:11 --> Total execution time: 0.0277
DEBUG - 2024-12-15 09:36:11 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 09:36:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 09:36:11 --> Total execution time: 0.1876
DEBUG - 2024-12-15 09:36:18 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 09:36:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 09:36:18 --> Total execution time: 0.0563
DEBUG - 2024-12-15 09:36:18 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 09:36:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 09:36:18 --> Total execution time: 0.0463
DEBUG - 2024-12-15 09:36:19 --> UTF-8 Support Enabled
DEBUG - 2024-12-15 09:36:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-15 09:36:19 --> Total execution time: 0.0403
