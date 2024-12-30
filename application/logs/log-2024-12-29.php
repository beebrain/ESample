<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2024-12-29 00:52:41 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 00:52:41 --> No URI present. Default controller set.
DEBUG - 2024-12-29 00:52:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 00:52:42 --> Total execution time: 1.8277
DEBUG - 2024-12-29 00:52:45 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 00:52:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 00:52:45 --> Total execution time: 0.1745
DEBUG - 2024-12-29 00:52:47 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 00:52:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 00:52:47 --> Total execution time: 0.0538
DEBUG - 2024-12-29 00:52:48 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 00:52:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 00:52:48 --> Total execution time: 0.0605
DEBUG - 2024-12-29 00:52:51 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 00:52:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 00:52:52 --> Total execution time: 0.8987
DEBUG - 2024-12-29 00:52:53 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 00:52:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 00:52:53 --> Total execution time: 0.0465
DEBUG - 2024-12-29 00:52:54 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 00:52:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 00:52:54 --> Status Counts: {"pending_assignment":0,"pending_results":7,"pending_confirmation":0,"pending_review":1}
DEBUG - 2024-12-29 00:52:54 --> Total execution time: 0.0952
DEBUG - 2024-12-29 00:52:54 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 00:52:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 00:52:54 --> Total execution time: 0.3294
DEBUG - 2024-12-29 00:52:55 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 00:52:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 00:52:55 --> Status Counts: {"pending_assignment":0,"pending_results":7,"pending_confirmation":0,"pending_review":1}
DEBUG - 2024-12-29 00:52:55 --> Total execution time: 0.0571
DEBUG - 2024-12-29 00:52:58 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 00:52:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 00:52:58 --> SELECT *
FROM `es_testapp`
WHERE `testid` = '56'
DEBUG - 2024-12-29 00:52:58 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '72'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-29 00:52:58 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '73'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-29 00:52:58 --> Total execution time: 0.0716
DEBUG - 2024-12-29 00:53:03 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 00:53:03 --> Global POST, GET and COOKIE data sanitized
ERROR - 2024-12-29 00:53:03 --> 404 Page Not Found: sample/Samplecontrol/testResults
ERROR - 2024-12-29 00:53:03 --> Severity: Warning --> include(C:\xampp\htdocs\ESample\application\views\errors\html\error_404.php): Failed to open stream: No such file or directory C:\xampp\htdocs\ESample\system\core\Exceptions.php 183
ERROR - 2024-12-29 00:53:03 --> Severity: Warning --> include(): Failed opening 'C:\xampp\htdocs\ESample\application\views\errors\html\error_404.php' for inclusion (include_path='C:\xampp\php\PEAR') C:\xampp\htdocs\ESample\system\core\Exceptions.php 183
DEBUG - 2024-12-29 00:53:06 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 00:53:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 00:53:06 --> Total execution time: 0.0519
DEBUG - 2024-12-29 00:53:07 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 00:53:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 00:53:07 --> Total execution time: 0.0599
DEBUG - 2024-12-29 00:53:07 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 00:53:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 00:53:07 --> Status Counts: {"pending_assignment":0,"pending_results":7,"pending_confirmation":0,"pending_review":1}
DEBUG - 2024-12-29 00:53:07 --> Total execution time: 0.0558
DEBUG - 2024-12-29 00:53:07 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 00:53:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 00:53:08 --> Total execution time: 0.3760
DEBUG - 2024-12-29 00:53:09 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 00:53:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 00:53:09 --> Status Counts: {"pending_assignment":0,"pending_results":7,"pending_confirmation":0,"pending_review":1}
DEBUG - 2024-12-29 00:53:09 --> Total execution time: 0.0529
DEBUG - 2024-12-29 00:55:00 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 00:55:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 00:55:01 --> Total execution time: 0.8343
DEBUG - 2024-12-29 00:55:01 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 00:55:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 00:55:01 --> Total execution time: 0.0392
DEBUG - 2024-12-29 00:55:02 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 00:55:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 00:55:02 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 00:55:02 --> Status Counts: {"pending_assignment":0,"pending_results":7,"pending_confirmation":0,"pending_review":1}
DEBUG - 2024-12-29 00:55:02 --> Total execution time: 0.0611
DEBUG - 2024-12-29 00:55:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 00:55:03 --> Total execution time: 0.4349
DEBUG - 2024-12-29 00:55:04 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 00:55:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 00:55:04 --> Status Counts: {"pending_assignment":0,"pending_results":7,"pending_confirmation":0,"pending_review":1}
DEBUG - 2024-12-29 00:55:04 --> Total execution time: 0.0413
DEBUG - 2024-12-29 00:55:05 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 00:55:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 00:55:05 --> SELECT *
FROM `es_testapp`
WHERE `testid` = '56'
DEBUG - 2024-12-29 00:55:05 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '72'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-29 00:55:05 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '73'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-29 00:55:05 --> Total execution time: 0.0606
DEBUG - 2024-12-29 00:55:10 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 00:55:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 00:55:10 --> SELECT *
FROM `es_testapp`
WHERE `testid` = '55'
DEBUG - 2024-12-29 00:55:10 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-29 00:55:10 --> Total execution time: 0.0345
DEBUG - 2024-12-29 00:55:23 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 00:55:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 00:55:23 --> Total execution time: 0.0357
DEBUG - 2024-12-29 00:55:24 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 00:55:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 00:55:24 --> Total execution time: 0.0394
DEBUG - 2024-12-29 00:55:24 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 00:55:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 00:55:24 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 00:55:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 00:55:24 --> Status Counts: {"pending_assignment":0,"pending_results":7,"pending_confirmation":0,"pending_review":1}
DEBUG - 2024-12-29 00:55:24 --> Total execution time: 0.2563
DEBUG - 2024-12-29 00:55:24 --> Total execution time: 0.5460
DEBUG - 2024-12-29 00:55:40 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 00:55:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 00:55:40 --> Status Counts: {"pending_assignment":0,"pending_results":7,"pending_confirmation":0,"pending_review":1}
DEBUG - 2024-12-29 00:55:40 --> Total execution time: 0.0520
DEBUG - 2024-12-29 00:55:46 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 00:55:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 00:55:49 --> SELECT *
FROM `es_testapp`
WHERE `testid` = '55'
DEBUG - 2024-12-29 00:55:49 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-29 00:55:49 --> Total execution time: 2.8846
DEBUG - 2024-12-29 00:56:57 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 00:56:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 00:56:57 --> Total execution time: 0.4082
DEBUG - 2024-12-29 00:56:58 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 00:56:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 00:56:58 --> Total execution time: 0.1509
DEBUG - 2024-12-29 00:56:58 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 00:56:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 00:56:58 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 00:56:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 00:56:59 --> Status Counts: {"pending_assignment":0,"pending_results":7,"pending_confirmation":0,"pending_review":1}
DEBUG - 2024-12-29 00:56:59 --> Total execution time: 0.2847
DEBUG - 2024-12-29 00:56:59 --> Total execution time: 0.5776
DEBUG - 2024-12-29 00:57:02 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 00:57:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 00:57:02 --> Status Counts: {"pending_assignment":0,"pending_results":7,"pending_confirmation":0,"pending_review":1}
DEBUG - 2024-12-29 00:57:02 --> Total execution time: 0.0339
DEBUG - 2024-12-29 00:57:07 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 00:57:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 00:57:07 --> SELECT *
FROM `es_testapp`
WHERE `testid` = '55'
DEBUG - 2024-12-29 00:57:07 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-29 00:57:07 --> Total execution time: 0.0594
DEBUG - 2024-12-29 00:58:04 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 00:58:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 00:58:04 --> SELECT *
FROM `es_testapp`
WHERE `testid` = '55'
DEBUG - 2024-12-29 00:58:04 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-29 00:58:04 --> Total execution time: 0.0353
DEBUG - 2024-12-29 00:58:11 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 00:58:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 00:58:11 --> SELECT *
FROM `es_testapp`
WHERE `testid` = '55'
DEBUG - 2024-12-29 00:58:11 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-29 00:58:11 --> Total execution time: 0.0614
DEBUG - 2024-12-29 00:58:24 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 00:58:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 00:58:24 --> SELECT *
FROM `es_testapp`
WHERE `testid` = '55'
DEBUG - 2024-12-29 00:58:24 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-29 00:58:24 --> Total execution time: 0.0562
DEBUG - 2024-12-29 00:58:35 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 00:58:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 00:58:35 --> Total execution time: 0.0540
DEBUG - 2024-12-29 00:58:36 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 00:58:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 00:58:36 --> Total execution time: 0.0451
DEBUG - 2024-12-29 00:58:37 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 00:58:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 00:58:37 --> Status Counts: {"pending_assignment":0,"pending_results":7,"pending_confirmation":0,"pending_review":1}
DEBUG - 2024-12-29 00:58:37 --> Total execution time: 0.1118
DEBUG - 2024-12-29 00:58:37 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 00:58:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 00:58:37 --> Total execution time: 0.3761
DEBUG - 2024-12-29 00:58:38 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 00:58:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 00:58:38 --> Status Counts: {"pending_assignment":0,"pending_results":7,"pending_confirmation":0,"pending_review":1}
DEBUG - 2024-12-29 00:58:38 --> Total execution time: 0.0345
DEBUG - 2024-12-29 00:58:41 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 00:58:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 00:58:41 --> Total execution time: 0.0395
DEBUG - 2024-12-29 01:02:27 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:02:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:02:27 --> Total execution time: 0.0798
DEBUG - 2024-12-29 01:02:28 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:02:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:02:28 --> Total execution time: 0.0319
DEBUG - 2024-12-29 01:02:28 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:02:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:02:28 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:02:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:02:28 --> Status Counts: {"pending_assignment":0,"pending_results":7,"pending_confirmation":0,"pending_review":1}
DEBUG - 2024-12-29 01:02:28 --> Total execution time: 0.3284
DEBUG - 2024-12-29 01:02:29 --> Total execution time: 0.6345
DEBUG - 2024-12-29 01:02:33 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:02:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:02:33 --> SELECT *
FROM `es_testapp`
WHERE `testid` = '56'
DEBUG - 2024-12-29 01:02:33 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '72'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-29 01:02:33 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '73'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-29 01:02:33 --> Total execution time: 0.0605
DEBUG - 2024-12-29 01:03:38 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:03:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:03:38 --> Total execution time: 0.0739
DEBUG - 2024-12-29 01:03:39 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:03:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:03:39 --> Total execution time: 0.0436
DEBUG - 2024-12-29 01:03:39 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:03:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:03:40 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:03:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:03:40 --> Status Counts: {"pending_assignment":0,"pending_results":7,"pending_confirmation":0,"pending_review":1}
DEBUG - 2024-12-29 01:03:40 --> Total execution time: 0.2096
DEBUG - 2024-12-29 01:03:40 --> Total execution time: 0.4845
DEBUG - 2024-12-29 01:03:43 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:03:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:03:43 --> SELECT *
FROM `es_testapp`
WHERE `testid` = '56'
DEBUG - 2024-12-29 01:03:43 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '72'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-29 01:03:43 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '73'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-29 01:03:43 --> Total execution time: 0.0404
DEBUG - 2024-12-29 01:03:51 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:03:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:03:51 --> SELECT *
FROM `es_testapp`
WHERE `testid` = '55'
DEBUG - 2024-12-29 01:03:51 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-29 01:03:51 --> Total execution time: 0.0375
DEBUG - 2024-12-29 01:04:14 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:04:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:04:14 --> SELECT *
FROM `es_testapp`
WHERE `testid` = '55'
DEBUG - 2024-12-29 01:04:14 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-29 01:04:14 --> Total execution time: 0.0592
DEBUG - 2024-12-29 01:04:40 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:04:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:04:40 --> SELECT *
FROM `es_testapp`
WHERE `testid` = '55'
DEBUG - 2024-12-29 01:04:40 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-29 01:04:40 --> Total execution time: 0.0587
DEBUG - 2024-12-29 01:05:22 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:05:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:05:22 --> SELECT *
FROM `es_testapp`
WHERE `testid` = '55'
DEBUG - 2024-12-29 01:05:22 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-29 01:05:22 --> Total execution time: 0.0370
DEBUG - 2024-12-29 01:06:22 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:06:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:06:22 --> Total execution time: 0.0552
DEBUG - 2024-12-29 01:06:23 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:06:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:06:23 --> Total execution time: 0.0335
DEBUG - 2024-12-29 01:06:23 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:06:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:06:23 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:06:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:06:23 --> Status Counts: {"pending_assignment":0,"pending_results":7,"pending_confirmation":0,"pending_review":1}
DEBUG - 2024-12-29 01:06:23 --> Total execution time: 0.2490
DEBUG - 2024-12-29 01:06:24 --> Total execution time: 0.5508
DEBUG - 2024-12-29 01:06:27 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:06:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:06:27 --> SELECT *
FROM `es_testapp`
WHERE `testid` = '55'
DEBUG - 2024-12-29 01:06:27 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-29 01:06:27 --> Total execution time: 0.0567
DEBUG - 2024-12-29 01:06:41 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:06:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:06:41 --> SELECT *
FROM `es_testapp`
WHERE `testid` = '55'
DEBUG - 2024-12-29 01:06:41 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-29 01:06:41 --> Total execution time: 0.0455
DEBUG - 2024-12-29 01:08:13 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:08:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:08:13 --> SELECT *
FROM `es_testapp`
WHERE `testid` = '55'
DEBUG - 2024-12-29 01:08:13 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-29 01:08:13 --> Total execution time: 0.0549
DEBUG - 2024-12-29 01:10:59 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:10:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:10:59 --> Total execution time: 0.0802
DEBUG - 2024-12-29 01:11:00 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:11:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:11:00 --> Total execution time: 0.0439
DEBUG - 2024-12-29 01:11:00 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:11:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:11:00 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:11:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:11:01 --> Status Counts: {"pending_assignment":0,"pending_results":7,"pending_confirmation":0,"pending_review":1}
DEBUG - 2024-12-29 01:11:01 --> Total execution time: 0.2327
DEBUG - 2024-12-29 01:11:01 --> Total execution time: 0.5647
DEBUG - 2024-12-29 01:11:15 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:11:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:11:15 --> SELECT *
FROM `es_testapp`
WHERE `testid` = '55'
DEBUG - 2024-12-29 01:11:15 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-29 01:11:15 --> Total execution time: 0.0450
DEBUG - 2024-12-29 01:12:11 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:12:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:12:11 --> Total execution time: 0.0891
DEBUG - 2024-12-29 01:12:12 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:12:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:12:12 --> Total execution time: 0.0388
DEBUG - 2024-12-29 01:12:12 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:12:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:12:12 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:12:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:12:12 --> Status Counts: {"pending_assignment":0,"pending_results":7,"pending_confirmation":0,"pending_review":1}
DEBUG - 2024-12-29 01:12:12 --> Total execution time: 0.1907
DEBUG - 2024-12-29 01:12:12 --> Total execution time: 0.4818
DEBUG - 2024-12-29 01:12:16 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:12:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:12:16 --> SELECT *
FROM `es_testapp`
WHERE `testid` = '56'
DEBUG - 2024-12-29 01:12:16 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '72'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-29 01:12:16 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '73'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-29 01:12:16 --> Total execution time: 0.0595
DEBUG - 2024-12-29 01:12:25 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:12:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:12:25 --> SELECT *
FROM `es_testapp`
WHERE `testid` = '55'
DEBUG - 2024-12-29 01:12:25 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-29 01:12:25 --> Total execution time: 0.0603
DEBUG - 2024-12-29 01:13:58 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:13:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:13:58 --> SELECT *
FROM `es_testapp`
WHERE `testid` = '55'
DEBUG - 2024-12-29 01:13:58 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-29 01:13:58 --> Total execution time: 0.0352
DEBUG - 2024-12-29 01:15:23 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:15:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:15:23 --> Total execution time: 0.0719
DEBUG - 2024-12-29 01:15:24 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:15:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:15:24 --> Total execution time: 0.0561
DEBUG - 2024-12-29 01:15:24 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:15:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:15:24 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:15:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:15:25 --> Status Counts: {"pending_assignment":0,"pending_results":7,"pending_confirmation":0,"pending_review":1}
DEBUG - 2024-12-29 01:15:25 --> Total execution time: 0.2778
DEBUG - 2024-12-29 01:15:25 --> Total execution time: 0.5311
DEBUG - 2024-12-29 01:15:28 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:15:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:15:28 --> SELECT *
FROM `es_testapp`
WHERE `testid` = '55'
DEBUG - 2024-12-29 01:15:28 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-29 01:15:28 --> Total execution time: 0.0451
DEBUG - 2024-12-29 01:15:36 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:15:36 --> Global POST, GET and COOKIE data sanitized
ERROR - 2024-12-29 01:15:36 --> 404 Page Not Found: sample/Samplecontrol/generatePDF
ERROR - 2024-12-29 01:15:36 --> Severity: Warning --> include(C:\xampp\htdocs\ESample\application\views\errors\html\error_404.php): Failed to open stream: No such file or directory C:\xampp\htdocs\ESample\system\core\Exceptions.php 183
ERROR - 2024-12-29 01:15:36 --> Severity: Warning --> include(): Failed opening 'C:\xampp\htdocs\ESample\application\views\errors\html\error_404.php' for inclusion (include_path='C:\xampp\php\PEAR') C:\xampp\htdocs\ESample\system\core\Exceptions.php 183
DEBUG - 2024-12-29 01:15:40 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:15:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:15:40 --> Total execution time: 0.0215
DEBUG - 2024-12-29 01:15:41 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:15:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:15:41 --> Total execution time: 0.0292
DEBUG - 2024-12-29 01:15:41 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:15:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:15:41 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:15:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:15:41 --> Status Counts: {"pending_assignment":0,"pending_results":7,"pending_confirmation":0,"pending_review":1}
DEBUG - 2024-12-29 01:15:41 --> Total execution time: 0.1873
DEBUG - 2024-12-29 01:15:42 --> Total execution time: 0.5117
DEBUG - 2024-12-29 01:15:44 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:15:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:15:44 --> SELECT *
FROM `es_testapp`
WHERE `testid` = '56'
DEBUG - 2024-12-29 01:15:44 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '72'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-29 01:15:44 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '73'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-29 01:15:44 --> Total execution time: 0.0316
DEBUG - 2024-12-29 01:15:56 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:15:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:15:56 --> Total execution time: 0.0444
DEBUG - 2024-12-29 01:16:32 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:16:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:16:32 --> Total execution time: 0.2250
DEBUG - 2024-12-29 01:16:33 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:16:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:16:33 --> Total execution time: 0.0385
DEBUG - 2024-12-29 01:16:33 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:16:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:16:33 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:16:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:16:33 --> Status Counts: {"pending_assignment":0,"pending_results":7,"pending_confirmation":0,"pending_review":1}
DEBUG - 2024-12-29 01:16:33 --> Total execution time: 0.2043
DEBUG - 2024-12-29 01:16:34 --> Total execution time: 0.5150
DEBUG - 2024-12-29 01:16:38 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:16:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:16:38 --> Total execution time: 0.0406
DEBUG - 2024-12-29 01:16:54 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:16:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:16:54 --> SELECT *
FROM `es_testapp`
WHERE `testid` = '55'
DEBUG - 2024-12-29 01:16:54 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-29 01:16:54 --> Total execution time: 0.0609
DEBUG - 2024-12-29 01:18:32 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:18:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:18:32 --> Total execution time: 0.0854
DEBUG - 2024-12-29 01:18:33 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:18:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:18:33 --> Total execution time: 0.0290
DEBUG - 2024-12-29 01:18:33 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:18:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:18:33 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:18:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:18:33 --> Status Counts: {"pending_assignment":0,"pending_results":7,"pending_confirmation":0,"pending_review":1}
DEBUG - 2024-12-29 01:18:33 --> Total execution time: 0.2035
DEBUG - 2024-12-29 01:18:34 --> Total execution time: 0.5158
DEBUG - 2024-12-29 01:18:37 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:18:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:18:37 --> Total execution time: 0.0476
DEBUG - 2024-12-29 01:18:45 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:18:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:18:45 --> Total execution time: 0.0533
DEBUG - 2024-12-29 01:18:48 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:18:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:18:48 --> Total execution time: 0.0412
DEBUG - 2024-12-29 01:18:50 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:18:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:18:50 --> Total execution time: 0.0344
DEBUG - 2024-12-29 01:18:52 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:18:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:18:52 --> Total execution time: 0.0380
DEBUG - 2024-12-29 01:18:59 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:18:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:18:59 --> Total execution time: 0.0341
DEBUG - 2024-12-29 01:19:00 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:19:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:19:00 --> Total execution time: 0.0281
DEBUG - 2024-12-29 01:19:01 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:19:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:19:01 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:19:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:19:01 --> Status Counts: {"pending_assignment":0,"pending_results":7,"pending_confirmation":0,"pending_review":1}
DEBUG - 2024-12-29 01:19:01 --> Total execution time: 0.2059
DEBUG - 2024-12-29 01:19:01 --> Total execution time: 0.5431
DEBUG - 2024-12-29 01:19:06 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:19:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:19:06 --> Total execution time: 0.0387
DEBUG - 2024-12-29 01:20:21 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:20:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:20:21 --> Total execution time: 0.1035
DEBUG - 2024-12-29 01:20:22 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:20:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:20:22 --> Total execution time: 0.0566
DEBUG - 2024-12-29 01:20:23 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:20:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:20:23 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:20:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:20:23 --> Status Counts: {"pending_assignment":0,"pending_results":7,"pending_confirmation":0,"pending_review":1}
DEBUG - 2024-12-29 01:20:23 --> Total execution time: 0.2183
DEBUG - 2024-12-29 01:20:23 --> Total execution time: 0.5157
DEBUG - 2024-12-29 01:20:26 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:20:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:20:26 --> Total execution time: 0.0320
DEBUG - 2024-12-29 01:20:30 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:20:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:20:30 --> Total execution time: 0.0487
DEBUG - 2024-12-29 01:21:13 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:21:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:21:13 --> Total execution time: 0.0565
DEBUG - 2024-12-29 01:22:39 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:22:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:22:39 --> Total execution time: 0.0868
DEBUG - 2024-12-29 01:22:40 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:22:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:22:40 --> Total execution time: 0.0352
DEBUG - 2024-12-29 01:22:40 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:22:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:22:40 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:22:40 --> Status Counts: {"pending_assignment":0,"pending_results":7,"pending_confirmation":0,"pending_review":1}
DEBUG - 2024-12-29 01:22:40 --> Total execution time: 0.1605
DEBUG - 2024-12-29 01:22:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:22:41 --> Total execution time: 0.4371
DEBUG - 2024-12-29 01:22:44 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:22:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:22:44 --> Total execution time: 0.0390
DEBUG - 2024-12-29 01:23:10 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:23:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:23:10 --> Total execution time: 0.0423
DEBUG - 2024-12-29 01:23:15 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:23:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:23:15 --> SELECT *
FROM `es_testapp`
WHERE `testid` = '55'
DEBUG - 2024-12-29 01:23:15 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-29 01:23:15 --> Total execution time: 0.0367
DEBUG - 2024-12-29 01:27:40 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:27:40 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:27:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:27:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:27:40 --> Total execution time: 0.0347
DEBUG - 2024-12-29 01:27:41 --> Status Counts: {"pending_assignment":0,"pending_results":7,"pending_confirmation":0,"pending_review":1}
DEBUG - 2024-12-29 01:27:41 --> Total execution time: 0.4515
DEBUG - 2024-12-29 01:30:21 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:30:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:30:21 --> Total execution time: 0.0382
DEBUG - 2024-12-29 01:30:25 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:30:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:30:25 --> SELECT *
FROM `es_testapp`
WHERE `testid` = '56'
DEBUG - 2024-12-29 01:30:25 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '72'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-29 01:30:25 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '73'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-29 01:30:25 --> Total execution time: 0.0352
DEBUG - 2024-12-29 01:30:30 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:30:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:30:30 --> SELECT *
FROM `es_testapp`
WHERE `testid` = '55'
DEBUG - 2024-12-29 01:30:30 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-29 01:30:30 --> Total execution time: 0.0472
DEBUG - 2024-12-29 01:32:40 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:32:40 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:32:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:32:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:32:40 --> Status Counts: {"pending_assignment":0,"pending_results":7,"pending_confirmation":0,"pending_review":1}
DEBUG - 2024-12-29 01:32:40 --> Total execution time: 0.0353
DEBUG - 2024-12-29 01:32:41 --> Total execution time: 0.4538
DEBUG - 2024-12-29 01:33:26 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:33:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:33:26 --> SELECT *
FROM `es_testapp`
WHERE `testid` = '55'
DEBUG - 2024-12-29 01:33:26 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-29 01:33:26 --> Total execution time: 0.0478
DEBUG - 2024-12-29 01:33:29 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:33:29 --> Global POST, GET and COOKIE data sanitized
ERROR - 2024-12-29 01:33:29 --> 404 Page Not Found: sample/Samplecontrol/generatePDF
ERROR - 2024-12-29 01:33:29 --> Severity: Warning --> include(C:\xampp\htdocs\ESample\application\views\errors\html\error_404.php): Failed to open stream: No such file or directory C:\xampp\htdocs\ESample\system\core\Exceptions.php 183
ERROR - 2024-12-29 01:33:29 --> Severity: Warning --> include(): Failed opening 'C:\xampp\htdocs\ESample\application\views\errors\html\error_404.php' for inclusion (include_path='C:\xampp\php\PEAR') C:\xampp\htdocs\ESample\system\core\Exceptions.php 183
DEBUG - 2024-12-29 01:34:07 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:34:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:34:07 --> Total execution time: 0.0764
DEBUG - 2024-12-29 01:34:08 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:34:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:34:08 --> Total execution time: 0.0345
DEBUG - 2024-12-29 01:34:09 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:34:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:34:09 --> Status Counts: {"pending_assignment":0,"pending_results":7,"pending_confirmation":0,"pending_review":1}
DEBUG - 2024-12-29 01:34:09 --> Total execution time: 0.0431
DEBUG - 2024-12-29 01:34:09 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:34:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:34:09 --> Total execution time: 0.3606
DEBUG - 2024-12-29 01:34:12 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:34:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:34:12 --> SELECT *
FROM `es_testapp`
WHERE `testid` = '56'
DEBUG - 2024-12-29 01:34:12 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '72'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-29 01:34:12 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '73'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-29 01:34:12 --> Total execution time: 0.0487
DEBUG - 2024-12-29 01:34:15 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:34:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:34:15 --> SELECT *
FROM `es_testapp`
WHERE `testid` = '55'
DEBUG - 2024-12-29 01:34:15 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-29 01:34:15 --> Total execution time: 0.0457
DEBUG - 2024-12-29 01:34:18 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:34:18 --> Global POST, GET and COOKIE data sanitized
ERROR - 2024-12-29 01:34:18 --> 404 Page Not Found: Result/Resultpanel/generatePDF
ERROR - 2024-12-29 01:34:18 --> Severity: Warning --> include(C:\xampp\htdocs\ESample\application\views\errors\html\error_404.php): Failed to open stream: No such file or directory C:\xampp\htdocs\ESample\system\core\Exceptions.php 183
ERROR - 2024-12-29 01:34:18 --> Severity: Warning --> include(): Failed opening 'C:\xampp\htdocs\ESample\application\views\errors\html\error_404.php' for inclusion (include_path='C:\xampp\php\PEAR') C:\xampp\htdocs\ESample\system\core\Exceptions.php 183
DEBUG - 2024-12-29 01:34:32 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:34:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:34:33 --> Total execution time: 0.0555
DEBUG - 2024-12-29 01:34:34 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:34:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:34:34 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-29 01:34:34 --> Total execution time: 0.0324
DEBUG - 2024-12-29 01:34:35 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:34:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:34:35 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-29 01:34:35 --> Total execution time: 0.0297
DEBUG - 2024-12-29 01:34:37 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:34:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:34:37 --> Total execution time: 0.0523
DEBUG - 2024-12-29 01:34:39 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:34:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:34:39 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-29 01:34:39 --> Total execution time: 0.0302
DEBUG - 2024-12-29 01:44:18 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:44:18 --> No URI present. Default controller set.
DEBUG - 2024-12-29 01:44:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:44:19 --> Total execution time: 0.1140
DEBUG - 2024-12-29 01:44:21 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:44:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:44:21 --> Total execution time: 0.0281
DEBUG - 2024-12-29 01:44:23 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:44:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:44:23 --> Total execution time: 0.2471
DEBUG - 2024-12-29 01:44:24 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:44:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:44:24 --> Total execution time: 0.0449
DEBUG - 2024-12-29 01:44:28 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:44:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:44:28 --> Total execution time: 0.1153
DEBUG - 2024-12-29 01:44:29 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:44:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:44:29 --> Total execution time: 0.0589
DEBUG - 2024-12-29 01:44:30 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:44:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:44:30 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:44:30 --> Status Counts: {"pending_assignment":0,"pending_results":7,"pending_confirmation":0,"pending_review":1}
DEBUG - 2024-12-29 01:44:30 --> Total execution time: 0.0457
DEBUG - 2024-12-29 01:44:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:44:30 --> Total execution time: 0.4343
DEBUG - 2024-12-29 01:44:34 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:44:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:44:34 --> SELECT *
FROM `es_testapp`
WHERE `testid` = '55'
DEBUG - 2024-12-29 01:44:34 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-29 01:44:34 --> Total execution time: 0.0615
DEBUG - 2024-12-29 01:44:37 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:44:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:44:37 --> Total execution time: 0.0568
DEBUG - 2024-12-29 01:44:39 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:44:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:44:39 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-29 01:44:39 --> Total execution time: 0.0397
DEBUG - 2024-12-29 01:44:40 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:44:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:44:40 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-29 01:44:40 --> Total execution time: 0.0257
DEBUG - 2024-12-29 01:53:34 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:53:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:53:36 --> Total execution time: 1.7121
DEBUG - 2024-12-29 01:53:37 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:53:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:53:37 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-29 01:53:37 --> Total execution time: 0.0974
DEBUG - 2024-12-29 01:53:39 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:53:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:53:39 --> Total execution time: 0.0732
DEBUG - 2024-12-29 01:53:39 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:53:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:53:39 --> Total execution time: 0.1624
DEBUG - 2024-12-29 01:53:40 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:53:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:53:40 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:53:40 --> Status Counts: {"pending_assignment":0,"pending_results":7,"pending_confirmation":0,"pending_review":1}
DEBUG - 2024-12-29 01:53:40 --> Total execution time: 0.0450
DEBUG - 2024-12-29 01:53:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:53:40 --> Total execution time: 0.4367
DEBUG - 2024-12-29 01:53:59 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:53:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:53:59 --> SELECT *
FROM `es_testapp`
WHERE `testid` = '55'
DEBUG - 2024-12-29 01:53:59 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-29 01:53:59 --> Total execution time: 0.0624
DEBUG - 2024-12-29 01:54:02 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:54:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:54:02 --> Total execution time: 0.1180
DEBUG - 2024-12-29 01:54:03 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:54:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:54:03 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-29 01:54:03 --> Total execution time: 0.0331
DEBUG - 2024-12-29 01:54:06 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:54:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:54:06 --> Total execution time: 0.0419
DEBUG - 2024-12-29 01:54:07 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:54:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:54:07 --> Total execution time: 0.0572
DEBUG - 2024-12-29 01:54:08 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:54:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:54:08 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 01:54:08 --> Status Counts: {"pending_assignment":0,"pending_results":7,"pending_confirmation":0,"pending_review":1}
DEBUG - 2024-12-29 01:54:08 --> Total execution time: 0.0366
DEBUG - 2024-12-29 01:54:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 01:54:08 --> Total execution time: 0.4259
DEBUG - 2024-12-29 02:54:28 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 02:54:28 --> No URI present. Default controller set.
DEBUG - 2024-12-29 02:54:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 02:54:29 --> Total execution time: 1.6105
DEBUG - 2024-12-29 02:54:37 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 02:54:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 02:54:37 --> Total execution time: 0.2523
DEBUG - 2024-12-29 02:54:39 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 02:54:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 02:54:39 --> Total execution time: 0.0559
DEBUG - 2024-12-29 02:54:40 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 02:54:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 02:54:40 --> Total execution time: 0.0740
DEBUG - 2024-12-29 02:55:25 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 02:55:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 02:55:25 --> Total execution time: 0.0732
DEBUG - 2024-12-29 02:55:25 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 02:55:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 02:55:25 --> Total execution time: 0.0604
DEBUG - 2024-12-29 02:55:26 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 02:55:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 02:55:26 --> Status Counts: {"pending_assignment":0,"pending_results":7,"pending_confirmation":0,"pending_review":1}
DEBUG - 2024-12-29 02:55:26 --> Total execution time: 0.0695
DEBUG - 2024-12-29 02:55:26 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 02:55:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 02:55:27 --> Total execution time: 0.1637
DEBUG - 2024-12-29 02:55:30 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 02:55:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 02:55:30 --> SELECT *
FROM `es_testapp`
WHERE `testid` = '56'
DEBUG - 2024-12-29 02:55:30 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '72'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-29 02:55:30 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '73'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-29 02:55:30 --> Total execution time: 0.0969
DEBUG - 2024-12-29 02:55:33 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 02:55:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 02:55:33 --> SELECT *
FROM `es_testapp`
WHERE `testid` = '55'
DEBUG - 2024-12-29 02:55:33 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-29 02:55:33 --> Total execution time: 0.0633
DEBUG - 2024-12-29 02:55:37 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 02:55:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 02:55:37 --> Total execution time: 0.1609
DEBUG - 2024-12-29 02:55:38 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 02:55:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 02:55:38 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-29 02:55:38 --> Total execution time: 0.0509
DEBUG - 2024-12-29 02:56:45 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 02:56:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 02:56:45 --> Total execution time: 0.0713
DEBUG - 2024-12-29 02:56:46 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 02:56:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 02:56:46 --> Total execution time: 0.0652
DEBUG - 2024-12-29 02:56:46 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 02:56:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 02:56:47 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 02:56:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 02:56:47 --> Status Counts: {"pending_assignment":0,"pending_results":7,"pending_confirmation":0,"pending_review":1}
DEBUG - 2024-12-29 02:56:47 --> Total execution time: 0.0774
DEBUG - 2024-12-29 02:56:47 --> Total execution time: 0.4565
DEBUG - 2024-12-29 02:56:50 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 02:56:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 02:56:50 --> SELECT *
FROM `es_testapp`
WHERE `testid` = '55'
DEBUG - 2024-12-29 02:56:50 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-29 02:56:50 --> Total execution time: 0.0570
DEBUG - 2024-12-29 02:56:56 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 02:56:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 02:56:56 --> Total execution time: 0.1470
DEBUG - 2024-12-29 02:56:57 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 02:56:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 02:56:57 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-29 02:56:57 --> Total execution time: 0.0560
DEBUG - 2024-12-29 02:57:07 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 02:57:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 02:57:07 --> Total execution time: 0.0452
DEBUG - 2024-12-29 02:57:08 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 02:57:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 02:57:08 --> Total execution time: 0.0768
DEBUG - 2024-12-29 02:57:09 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 02:57:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 02:57:09 --> Status Counts: {"pending_assignment":0,"pending_results":7,"pending_confirmation":0,"pending_review":1}
DEBUG - 2024-12-29 02:57:09 --> Total execution time: 0.2045
DEBUG - 2024-12-29 02:57:09 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 02:57:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 02:57:09 --> Total execution time: 0.3616
DEBUG - 2024-12-29 02:57:12 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 02:57:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 02:57:12 --> SELECT *
FROM `es_testapp`
WHERE `testid` = '55'
DEBUG - 2024-12-29 02:57:12 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-29 02:57:12 --> Total execution time: 0.0587
DEBUG - 2024-12-29 02:57:23 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 02:57:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 02:57:23 --> Total execution time: 0.1101
DEBUG - 2024-12-29 03:18:54 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 03:18:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 03:18:55 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-29 03:18:55 --> Total execution time: 1.4316
DEBUG - 2024-12-29 03:18:56 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 03:18:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 03:18:56 --> Total execution time: 0.3185
DEBUG - 2024-12-29 03:21:00 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 03:21:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 03:21:00 --> Total execution time: 0.1179
DEBUG - 2024-12-29 03:21:17 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 03:21:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 03:21:17 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-29 03:21:17 --> Total execution time: 0.0483
DEBUG - 2024-12-29 03:26:13 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 03:26:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 03:26:13 --> Total execution time: 0.1510
DEBUG - 2024-12-29 03:26:18 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 03:26:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 03:26:18 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-29 03:26:18 --> Total execution time: 0.0421
DEBUG - 2024-12-29 03:27:32 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 03:27:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 03:27:32 --> Total execution time: 0.1314
DEBUG - 2024-12-29 03:27:38 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 03:27:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 03:27:38 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-29 03:27:38 --> Total execution time: 0.0536
DEBUG - 2024-12-29 03:27:52 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 03:27:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 03:27:52 --> Total execution time: 0.0547
DEBUG - 2024-12-29 03:27:55 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 03:27:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 03:27:55 --> Total execution time: 0.0678
DEBUG - 2024-12-29 03:28:05 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 03:28:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 03:28:05 --> Total execution time: 0.1251
DEBUG - 2024-12-29 03:28:06 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 03:28:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 03:28:06 --> Total execution time: 0.1475
DEBUG - 2024-12-29 03:28:06 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 03:28:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 03:28:06 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 03:28:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 03:28:06 --> Status Counts: {"pending_assignment":0,"pending_results":7,"pending_confirmation":0,"pending_review":1}
DEBUG - 2024-12-29 03:28:06 --> Total execution time: 0.2822
DEBUG - 2024-12-29 03:28:07 --> Total execution time: 0.5953
DEBUG - 2024-12-29 03:28:10 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 03:28:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 03:28:10 --> SELECT *
FROM `es_testapp`
WHERE `testid` = '55'
DEBUG - 2024-12-29 03:28:10 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-29 03:28:10 --> Total execution time: 0.0821
DEBUG - 2024-12-29 03:28:13 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 03:28:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 03:28:13 --> Total execution time: 0.1134
DEBUG - 2024-12-29 03:28:19 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 03:28:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 03:28:19 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-29 03:28:19 --> Total execution time: 0.0562
DEBUG - 2024-12-29 03:28:40 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 03:28:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 03:28:40 --> Total execution time: 0.1038
DEBUG - 2024-12-29 03:28:44 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 03:28:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 03:28:44 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-29 03:28:44 --> Total execution time: 0.0525
DEBUG - 2024-12-29 03:29:46 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 03:29:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 03:29:46 --> Total execution time: 0.1142
DEBUG - 2024-12-29 03:29:55 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 03:29:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 03:29:55 --> Total execution time: 0.0803
DEBUG - 2024-12-29 03:32:44 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 03:32:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 03:32:45 --> Total execution time: 0.1295
DEBUG - 2024-12-29 03:32:51 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 03:32:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 03:32:51 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-29 03:32:51 --> Total execution time: 0.0456
DEBUG - 2024-12-29 03:40:33 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 03:40:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 03:40:34 --> Total execution time: 0.0639
DEBUG - 2024-12-29 03:40:42 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 03:40:42 --> Global POST, GET and COOKIE data sanitized
ERROR - 2024-12-29 03:40:42 --> Severity: error --> Exception: Call to a member function result() on array C:\xampp\htdocs\ESample\application\controllers\Dashboard\dashboardcontroller.php 21
DEBUG - 2024-12-29 03:40:59 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 03:40:59 --> Global POST, GET and COOKIE data sanitized
ERROR - 2024-12-29 03:40:59 --> Severity: error --> Exception: Call to a member function result() on array C:\xampp\htdocs\ESample\application\controllers\Dashboard\dashboardcontroller.php 21
DEBUG - 2024-12-29 03:41:57 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 03:41:57 --> Global POST, GET and COOKIE data sanitized
ERROR - 2024-12-29 03:43:18 --> Severity: error --> Exception: Call to a member function result() on array C:\xampp\htdocs\ESample\application\controllers\Dashboard\dashboardcontroller.php 21
DEBUG - 2024-12-29 03:43:22 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 03:43:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 03:43:22 --> Total execution time: 0.1546
DEBUG - 2024-12-29 04:52:24 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 04:52:24 --> No URI present. Default controller set.
DEBUG - 2024-12-29 04:52:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 04:52:24 --> Total execution time: 0.0895
DEBUG - 2024-12-29 04:52:27 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 04:52:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 04:52:27 --> Total execution time: 0.0522
DEBUG - 2024-12-29 04:52:29 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 04:52:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 04:52:29 --> Total execution time: 0.1434
DEBUG - 2024-12-29 04:52:29 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 04:52:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 04:52:30 --> Total execution time: 0.0733
DEBUG - 2024-12-29 04:52:37 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 04:52:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 04:52:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2024-12-29 04:52:38 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 04:52:38 --> Global POST, GET and COOKIE data sanitized
ERROR - 2024-12-29 04:52:38 --> 404 Page Not Found: Auth/login
ERROR - 2024-12-29 04:52:38 --> Severity: Warning --> include(C:\xampp\htdocs\ESample\application\views\errors\html\error_404.php): Failed to open stream: No such file or directory C:\xampp\htdocs\ESample\system\core\Exceptions.php 183
ERROR - 2024-12-29 04:52:38 --> Severity: Warning --> include(): Failed opening 'C:\xampp\htdocs\ESample\application\views\errors\html\error_404.php' for inclusion (include_path='C:\xampp\php\PEAR') C:\xampp\htdocs\ESample\system\core\Exceptions.php 183
DEBUG - 2024-12-29 04:52:59 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 04:52:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 04:52:59 --> Total execution time: 0.0752
DEBUG - 2024-12-29 04:53:00 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 04:53:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 04:53:00 --> Total execution time: 0.0637
DEBUG - 2024-12-29 04:53:07 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 04:53:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 04:53:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2024-12-29 04:53:07 --> Total execution time: 0.2190
DEBUG - 2024-12-29 04:56:40 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 04:56:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 04:56:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2024-12-29 04:56:40 --> Total execution time: 0.1076
DEBUG - 2024-12-29 04:57:11 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 04:57:11 --> Global POST, GET and COOKIE data sanitized
ERROR - 2024-12-29 04:57:11 --> 404 Page Not Found: Dashboard/Dashboardcontroller/index
ERROR - 2024-12-29 04:57:11 --> Severity: Warning --> include(C:\xampp\htdocs\ESample\application\views\errors\html\error_404.php): Failed to open stream: No such file or directory C:\xampp\htdocs\ESample\system\core\Exceptions.php 183
ERROR - 2024-12-29 04:57:11 --> Severity: Warning --> include(): Failed opening 'C:\xampp\htdocs\ESample\application\views\errors\html\error_404.php' for inclusion (include_path='C:\xampp\php\PEAR') C:\xampp\htdocs\ESample\system\core\Exceptions.php 183
DEBUG - 2024-12-29 04:57:17 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 04:57:17 --> Global POST, GET and COOKIE data sanitized
ERROR - 2024-12-29 04:57:17 --> 404 Page Not Found: dashboard/Dashboardcontroller/index
ERROR - 2024-12-29 04:57:17 --> Severity: Warning --> include(C:\xampp\htdocs\ESample\application\views\errors\html\error_404.php): Failed to open stream: No such file or directory C:\xampp\htdocs\ESample\system\core\Exceptions.php 183
ERROR - 2024-12-29 04:57:17 --> Severity: Warning --> include(): Failed opening 'C:\xampp\htdocs\ESample\application\views\errors\html\error_404.php' for inclusion (include_path='C:\xampp\php\PEAR') C:\xampp\htdocs\ESample\system\core\Exceptions.php 183
DEBUG - 2024-12-29 04:58:14 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 04:58:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 04:58:14 --> Total execution time: 0.0568
DEBUG - 2024-12-29 04:58:15 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 04:58:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 04:58:15 --> Total execution time: 0.0568
DEBUG - 2024-12-29 04:58:18 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 04:58:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 04:58:18 --> Total execution time: 0.0727
DEBUG - 2024-12-29 04:58:19 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 04:58:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 04:58:19 --> Total execution time: 0.0606
DEBUG - 2024-12-29 04:58:19 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 04:58:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 04:58:19 --> Status Counts: {"pending_assignment":0,"pending_results":7,"pending_confirmation":0,"pending_review":1}
DEBUG - 2024-12-29 04:58:19 --> Total execution time: 0.0593
DEBUG - 2024-12-29 04:58:20 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 04:58:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-29 04:58:20 --> Total execution time: 0.2671
DEBUG - 2024-12-29 05:00:57 --> UTF-8 Support Enabled
DEBUG - 2024-12-29 05:00:57 --> Global POST, GET and COOKIE data sanitized
ERROR - 2024-12-29 05:00:57 --> Query error: Unknown column 'status' in 'field list' - Invalid query: SELECT SUM(CASE WHEN status = "pending_assignment" THEN 1 ELSE 0 END) as pending_assignment, SUM(CASE WHEN status = "pending_results" THEN 1 ELSE 0 END) as pending_results, SUM(CASE WHEN status = "pending_confirmation" THEN 1 ELSE 0 END) as pending_confirmation, SUM(CASE WHEN status = "pending_review" THEN 1 ELSE 0 END) as pending_review
FROM `es_testapp`
ERROR - 2024-12-29 05:00:57 --> Severity: Warning --> include(C:\xampp\htdocs\ESample\application\views\errors\html\error_db.php): Failed to open stream: No such file or directory C:\xampp\htdocs\ESample\system\core\Exceptions.php 183
ERROR - 2024-12-29 05:00:57 --> Severity: Warning --> include(): Failed opening 'C:\xampp\htdocs\ESample\application\views\errors\html\error_db.php' for inclusion (include_path='C:\xampp\php\PEAR') C:\xampp\htdocs\ESample\system\core\Exceptions.php 183
