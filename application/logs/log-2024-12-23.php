<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2024-12-23 05:02:09 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:02:09 --> No URI present. Default controller set.
DEBUG - 2024-12-23 05:02:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:02:10 --> Total execution time: 2.5190
DEBUG - 2024-12-23 05:02:12 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:02:12 --> No URI present. Default controller set.
DEBUG - 2024-12-23 05:02:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:02:12 --> Total execution time: 0.0542
DEBUG - 2024-12-23 05:02:16 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:02:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:02:16 --> Total execution time: 0.1975
DEBUG - 2024-12-23 05:02:18 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:02:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:02:18 --> Total execution time: 0.2565
DEBUG - 2024-12-23 05:02:19 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:02:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:02:19 --> Total execution time: 0.1722
DEBUG - 2024-12-23 05:02:35 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:02:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:02:35 --> Total execution time: 0.0960
DEBUG - 2024-12-23 05:02:35 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:02:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:02:35 --> Total execution time: 0.0595
DEBUG - 2024-12-23 05:02:36 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:02:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:02:36 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-23 05:02:36 --> Total execution time: 0.1366
DEBUG - 2024-12-23 05:03:52 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:03:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:03:52 --> Total execution time: 0.0468
DEBUG - 2024-12-23 05:03:53 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:03:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:03:53 --> Total execution time: 0.0478
DEBUG - 2024-12-23 05:03:53 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:03:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:03:53 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-23 05:03:53 --> Total execution time: 0.0572
DEBUG - 2024-12-23 05:03:59 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:03:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:03:59 --> Total execution time: 0.1519
DEBUG - 2024-12-23 05:04:00 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:04:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:04:00 --> Total execution time: 0.0767
DEBUG - 2024-12-23 05:04:00 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:04:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:04:01 --> Total execution time: 0.0796
DEBUG - 2024-12-23 05:04:06 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:04:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:04:06 --> Total execution time: 0.0421
DEBUG - 2024-12-23 05:04:07 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:04:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:04:07 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-23 05:04:07 --> Total execution time: 0.0390
DEBUG - 2024-12-23 05:04:42 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:04:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:04:42 --> Total execution time: 0.0517
DEBUG - 2024-12-23 05:04:43 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:04:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:04:44 --> Total execution time: 0.0745
DEBUG - 2024-12-23 05:04:44 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:04:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:04:44 --> Total execution time: 0.3300
DEBUG - 2024-12-23 05:05:19 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:05:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:05:19 --> Total execution time: 0.0403
DEBUG - 2024-12-23 05:05:20 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:05:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:05:20 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-23 05:05:20 --> Total execution time: 0.0372
DEBUG - 2024-12-23 05:05:22 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:05:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:05:22 --> Total execution time: 0.0533
DEBUG - 2024-12-23 05:05:23 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:05:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:05:23 --> Total execution time: 0.0781
DEBUG - 2024-12-23 05:05:23 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:05:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:05:24 --> Total execution time: 0.4069
DEBUG - 2024-12-23 05:05:26 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:05:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:05:26 --> Total execution time: 0.0571
DEBUG - 2024-12-23 05:05:27 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:05:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:05:28 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-23 05:05:28 --> Total execution time: 0.0573
DEBUG - 2024-12-23 05:11:04 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:11:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:11:04 --> Total execution time: 0.0475
DEBUG - 2024-12-23 05:11:05 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:11:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:11:05 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:11:05 --> Total execution time: 0.0660
DEBUG - 2024-12-23 05:11:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:11:06 --> Total execution time: 0.4368
DEBUG - 2024-12-23 05:11:36 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:11:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:11:36 --> Total execution time: 0.0354
DEBUG - 2024-12-23 05:11:37 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:11:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:11:37 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-23 05:11:37 --> Total execution time: 0.0573
DEBUG - 2024-12-23 05:12:24 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:12:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:12:25 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:12:25 --> Global POST, GET and COOKIE data sanitized
ERROR - 2024-12-23 05:12:26 --> Severity: 8192 --> Return type of Google_Model::offsetExists($offset) should either be compatible with ArrayAccess::offsetExists(mixed $offset): bool, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice C:\xampp\htdocs\ESample\application\libraries\vendor\google\apiclient\src\Google\Model.php 249
ERROR - 2024-12-23 05:12:26 --> Severity: 8192 --> Return type of Google_Model::offsetGet($offset) should either be compatible with ArrayAccess::offsetGet(mixed $offset): mixed, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice C:\xampp\htdocs\ESample\application\libraries\vendor\google\apiclient\src\Google\Model.php 254
ERROR - 2024-12-23 05:12:26 --> Severity: 8192 --> Return type of Google_Model::offsetSet($offset, $value) should either be compatible with ArrayAccess::offsetSet(mixed $offset, mixed $value): void, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice C:\xampp\htdocs\ESample\application\libraries\vendor\google\apiclient\src\Google\Model.php 261
ERROR - 2024-12-23 05:12:26 --> Severity: 8192 --> Return type of Google_Model::offsetUnset($offset) should either be compatible with ArrayAccess::offsetUnset(mixed $offset): void, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice C:\xampp\htdocs\ESample\application\libraries\vendor\google\apiclient\src\Google\Model.php 271
ERROR - 2024-12-23 05:12:26 --> Severity: 8192 --> Return type of Google_Collection::current() should either be compatible with Iterator::current(): mixed, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice C:\xampp\htdocs\ESample\application\libraries\vendor\google\apiclient\src\Google\Collection.php 24
ERROR - 2024-12-23 05:12:26 --> Severity: 8192 --> Return type of Google_Collection::next() should either be compatible with Iterator::next(): void, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice C:\xampp\htdocs\ESample\application\libraries\vendor\google\apiclient\src\Google\Collection.php 40
ERROR - 2024-12-23 05:12:26 --> Severity: 8192 --> Return type of Google_Collection::key() should either be compatible with Iterator::key(): mixed, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice C:\xampp\htdocs\ESample\application\libraries\vendor\google\apiclient\src\Google\Collection.php 32
ERROR - 2024-12-23 05:12:26 --> Severity: 8192 --> Return type of Google_Collection::valid() should either be compatible with Iterator::valid(): bool, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice C:\xampp\htdocs\ESample\application\libraries\vendor\google\apiclient\src\Google\Collection.php 45
ERROR - 2024-12-23 05:12:26 --> Severity: 8192 --> Return type of Google_Collection::rewind() should either be compatible with Iterator::rewind(): void, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice C:\xampp\htdocs\ESample\application\libraries\vendor\google\apiclient\src\Google\Collection.php 16
ERROR - 2024-12-23 05:12:26 --> Severity: 8192 --> Return type of Google_Collection::count() should either be compatible with Countable::count(): int, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice C:\xampp\htdocs\ESample\application\libraries\vendor\google\apiclient\src\Google\Collection.php 51
DEBUG - 2024-12-23 05:12:27 --> Total execution time: 1.6351
DEBUG - 2024-12-23 05:12:31 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:12:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:12:31 --> Total execution time: 0.0321
DEBUG - 2024-12-23 05:12:38 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:12:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:12:38 --> Total execution time: 0.0395
DEBUG - 2024-12-23 05:12:39 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:12:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:12:39 --> Total execution time: 0.0357
DEBUG - 2024-12-23 05:12:40 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:12:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:12:40 --> Total execution time: 0.0455
DEBUG - 2024-12-23 05:12:43 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:12:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:12:43 --> Total execution time: 0.0532
DEBUG - 2024-12-23 05:12:44 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:12:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:12:44 --> Total execution time: 0.0576
DEBUG - 2024-12-23 05:12:44 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:12:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:12:44 --> Total execution time: 0.0391
DEBUG - 2024-12-23 05:12:48 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:12:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:12:48 --> Total execution time: 0.0375
DEBUG - 2024-12-23 05:12:48 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:12:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:12:49 --> Total execution time: 0.0611
DEBUG - 2024-12-23 05:12:49 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:12:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:12:49 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '002'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-23 05:12:49 --> Total execution time: 0.0474
DEBUG - 2024-12-23 05:12:55 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:12:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:12:55 --> Total execution time: 0.0376
DEBUG - 2024-12-23 05:12:56 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:12:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:12:56 --> Total execution time: 0.0465
DEBUG - 2024-12-23 05:12:56 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:12:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:12:56 --> Total execution time: 0.0307
DEBUG - 2024-12-23 05:13:00 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:13:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:13:00 --> Total execution time: 0.0369
DEBUG - 2024-12-23 05:13:01 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:13:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:13:01 --> Total execution time: 0.0600
DEBUG - 2024-12-23 05:13:01 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:13:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:13:01 --> Total execution time: 0.0607
DEBUG - 2024-12-23 05:13:32 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:13:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:13:32 --> Total execution time: 0.0567
DEBUG - 2024-12-23 05:13:33 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:13:33 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:13:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:13:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:13:33 --> Total execution time: 0.0831
DEBUG - 2024-12-23 05:13:33 --> Total execution time: 0.1117
DEBUG - 2024-12-23 05:13:51 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:13:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:13:51 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:13:51 --> Global POST, GET and COOKIE data sanitized
ERROR - 2024-12-23 05:13:51 --> Severity: 8192 --> Return type of Google_Model::offsetExists($offset) should either be compatible with ArrayAccess::offsetExists(mixed $offset): bool, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice C:\xampp\htdocs\ESample\application\libraries\vendor\google\apiclient\src\Google\Model.php 249
ERROR - 2024-12-23 05:13:51 --> Severity: 8192 --> Return type of Google_Model::offsetGet($offset) should either be compatible with ArrayAccess::offsetGet(mixed $offset): mixed, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice C:\xampp\htdocs\ESample\application\libraries\vendor\google\apiclient\src\Google\Model.php 254
ERROR - 2024-12-23 05:13:51 --> Severity: 8192 --> Return type of Google_Model::offsetSet($offset, $value) should either be compatible with ArrayAccess::offsetSet(mixed $offset, mixed $value): void, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice C:\xampp\htdocs\ESample\application\libraries\vendor\google\apiclient\src\Google\Model.php 261
ERROR - 2024-12-23 05:13:51 --> Severity: 8192 --> Return type of Google_Model::offsetUnset($offset) should either be compatible with ArrayAccess::offsetUnset(mixed $offset): void, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice C:\xampp\htdocs\ESample\application\libraries\vendor\google\apiclient\src\Google\Model.php 271
ERROR - 2024-12-23 05:13:51 --> Severity: 8192 --> Return type of Google_Collection::current() should either be compatible with Iterator::current(): mixed, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice C:\xampp\htdocs\ESample\application\libraries\vendor\google\apiclient\src\Google\Collection.php 24
ERROR - 2024-12-23 05:13:51 --> Severity: 8192 --> Return type of Google_Collection::next() should either be compatible with Iterator::next(): void, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice C:\xampp\htdocs\ESample\application\libraries\vendor\google\apiclient\src\Google\Collection.php 40
ERROR - 2024-12-23 05:13:51 --> Severity: 8192 --> Return type of Google_Collection::key() should either be compatible with Iterator::key(): mixed, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice C:\xampp\htdocs\ESample\application\libraries\vendor\google\apiclient\src\Google\Collection.php 32
ERROR - 2024-12-23 05:13:51 --> Severity: 8192 --> Return type of Google_Collection::valid() should either be compatible with Iterator::valid(): bool, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice C:\xampp\htdocs\ESample\application\libraries\vendor\google\apiclient\src\Google\Collection.php 45
ERROR - 2024-12-23 05:13:51 --> Severity: 8192 --> Return type of Google_Collection::rewind() should either be compatible with Iterator::rewind(): void, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice C:\xampp\htdocs\ESample\application\libraries\vendor\google\apiclient\src\Google\Collection.php 16
ERROR - 2024-12-23 05:13:51 --> Severity: 8192 --> Return type of Google_Collection::count() should either be compatible with Countable::count(): int, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice C:\xampp\htdocs\ESample\application\libraries\vendor\google\apiclient\src\Google\Collection.php 51
DEBUG - 2024-12-23 05:13:51 --> Total execution time: 0.0982
DEBUG - 2024-12-23 05:13:53 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:13:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:13:53 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:13:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:13:53 --> Total execution time: 0.0603
DEBUG - 2024-12-23 05:13:54 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:13:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:13:54 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:13:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:13:54 --> Total execution time: 0.0566
DEBUG - 2024-12-23 05:14:11 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:14:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:14:14 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:14:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:14:19 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:14:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:14:21 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:14:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:14:27 --> Total execution time: 5.3456
DEBUG - 2024-12-23 05:14:38 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:14:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:14:38 --> Total execution time: 0.0214
DEBUG - 2024-12-23 05:14:40 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:14:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:14:40 --> Total execution time: 0.0448
DEBUG - 2024-12-23 05:14:40 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:14:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:14:40 --> Total execution time: 0.0621
DEBUG - 2024-12-23 05:14:46 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:14:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:14:46 --> Total execution time: 0.0426
DEBUG - 2024-12-23 05:14:46 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:14:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:14:47 --> Total execution time: 0.0621
DEBUG - 2024-12-23 05:14:47 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:14:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:14:47 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '003'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-23 05:14:47 --> Total execution time: 0.0460
DEBUG - 2024-12-23 05:14:51 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:14:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:14:51 --> Total execution time: 0.0394
DEBUG - 2024-12-23 05:14:51 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:14:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:14:51 --> Total execution time: 0.0524
DEBUG - 2024-12-23 05:14:52 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:14:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:14:52 --> Total execution time: 0.0517
DEBUG - 2024-12-23 05:14:55 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:14:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:14:55 --> Total execution time: 0.0394
DEBUG - 2024-12-23 05:14:56 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:14:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:14:56 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-23 05:14:56 --> Total execution time: 0.0556
DEBUG - 2024-12-23 05:15:21 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:15:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:15:21 --> Total execution time: 0.0443
DEBUG - 2024-12-23 05:15:22 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:15:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:15:22 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-23 05:15:22 --> Total execution time: 0.0415
DEBUG - 2024-12-23 05:15:25 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:15:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:15:26 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:15:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:15:26 --> Total execution time: 0.0468
DEBUG - 2024-12-23 05:15:26 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:15:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:15:27 --> Total execution time: 0.2559
DEBUG - 2024-12-23 05:15:34 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:15:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:15:34 --> Total execution time: 0.0429
DEBUG - 2024-12-23 05:15:35 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:15:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:15:35 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-23 05:15:35 --> Total execution time: 0.0454
DEBUG - 2024-12-23 05:16:06 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:16:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:16:06 --> Total execution time: 0.0432
DEBUG - 2024-12-23 05:16:07 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:16:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:16:07 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-23 05:16:07 --> Total execution time: 0.0379
DEBUG - 2024-12-23 05:16:57 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:16:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:16:57 --> Total execution time: 0.0375
DEBUG - 2024-12-23 05:16:58 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:16:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:16:58 --> Total execution time: 0.0351
DEBUG - 2024-12-23 05:16:58 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:16:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:16:58 --> Total execution time: 0.2440
DEBUG - 2024-12-23 05:17:02 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:17:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:17:02 --> Total execution time: 0.0576
DEBUG - 2024-12-23 05:17:05 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:17:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:17:05 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-23 05:17:05 --> Total execution time: 0.0564
DEBUG - 2024-12-23 05:17:21 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:17:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:17:21 --> Total execution time: 0.0414
DEBUG - 2024-12-23 05:17:22 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:17:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:17:22 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-23 05:17:22 --> Total execution time: 0.0531
DEBUG - 2024-12-23 05:17:24 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:17:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:17:24 --> Total execution time: 0.0570
DEBUG - 2024-12-23 05:17:26 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:17:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:17:26 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-23 05:17:26 --> Total execution time: 0.0438
DEBUG - 2024-12-23 05:17:43 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:17:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:17:45 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:17:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:17:45 --> Total execution time: 0.0533
DEBUG - 2024-12-23 05:17:58 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:17:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:17:58 --> Total execution time: 0.0310
DEBUG - 2024-12-23 05:18:00 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:18:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:18:00 --> Total execution time: 0.0295
DEBUG - 2024-12-23 05:18:01 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:18:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:18:01 --> Total execution time: 0.0777
DEBUG - 2024-12-23 05:18:07 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:18:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:18:07 --> Total execution time: 0.0555
DEBUG - 2024-12-23 05:18:08 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:18:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:18:08 --> Total execution time: 0.0515
DEBUG - 2024-12-23 05:18:09 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:18:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:18:09 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-23 05:18:09 --> Total execution time: 0.0695
DEBUG - 2024-12-23 05:18:11 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:18:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:18:11 --> Total execution time: 0.0270
DEBUG - 2024-12-23 05:18:11 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:18:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:18:11 --> Total execution time: 0.0600
DEBUG - 2024-12-23 05:18:12 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:18:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:18:12 --> Total execution time: 0.1024
DEBUG - 2024-12-23 05:18:20 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:18:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:18:20 --> Total execution time: 0.0228
DEBUG - 2024-12-23 05:18:21 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:18:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:18:21 --> Total execution time: 0.0539
DEBUG - 2024-12-23 05:18:22 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:18:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:18:22 --> Total execution time: 0.0667
DEBUG - 2024-12-23 05:18:27 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:18:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:18:27 --> Total execution time: 0.0469
DEBUG - 2024-12-23 05:18:28 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:18:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:18:28 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-23 05:18:28 --> Total execution time: 0.0421
DEBUG - 2024-12-23 05:18:40 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:18:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:18:40 --> Total execution time: 0.0567
DEBUG - 2024-12-23 05:18:41 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:18:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:18:41 --> Total execution time: 0.0517
DEBUG - 2024-12-23 05:18:42 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:18:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:18:42 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-23 05:18:42 --> Total execution time: 0.0451
DEBUG - 2024-12-23 05:19:10 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:19:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:19:10 --> Total execution time: 0.0350
DEBUG - 2024-12-23 05:19:10 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:19:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:19:10 --> Total execution time: 0.0588
DEBUG - 2024-12-23 05:19:11 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:19:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:19:11 --> Total execution time: 0.0543
DEBUG - 2024-12-23 05:19:15 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:19:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:19:15 --> Total execution time: 0.0465
DEBUG - 2024-12-23 05:19:15 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:19:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:19:15 --> Total execution time: 0.0481
DEBUG - 2024-12-23 05:19:16 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:19:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:19:16 --> Total execution time: 0.0585
DEBUG - 2024-12-23 05:19:19 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:19:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:19:19 --> Total execution time: 0.0549
DEBUG - 2024-12-23 05:19:20 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:19:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:19:20 --> Total execution time: 0.0473
DEBUG - 2024-12-23 05:19:20 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:19:20 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:19:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:19:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:19:20 --> SELECT *
FROM `es_user`
WHERE `active` = '1'
DEBUG - 2024-12-23 05:19:20 --> Total execution time: 0.0288
DEBUG - 2024-12-23 05:19:21 --> Total execution time: 0.4396
DEBUG - 2024-12-23 05:19:22 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:19:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:19:22 --> SELECT *
FROM `es_testapp`
WHERE `testid` = '55'
DEBUG - 2024-12-23 05:19:22 --> Total execution time: 0.0399
DEBUG - 2024-12-23 05:19:22 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:19:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:19:22 --> SELECT `es_sampletestservice`.*, `es_sampletest`.`sampleid`, `es_sampletest`.`samplename`, `es_sampletest`.`textpack`, `es_sampletest`.`totalprice`, `es_service`.`service`, `es_service`.`method`, `es_service`.`price`
FROM `es_sampletest`
INNER JOIN `es_sampletestservice` ON `es_sampletest`.`sampleid` = `es_sampletestservice`.`sampleid`
INNER JOIN `es_service` ON `es_sampletestservice`.`serviceid` = `es_service`.`id`
WHERE `es_sampletest`.`sampleid` = '71'
DEBUG - 2024-12-23 05:19:22 --> Total execution time: 0.0557
DEBUG - 2024-12-23 05:19:23 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:19:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:19:23 --> SELECT *
FROM `es_user`
WHERE `active` = '1'
DEBUG - 2024-12-23 05:19:23 --> Total execution time: 0.0297
DEBUG - 2024-12-23 05:19:33 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:19:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:19:33 --> Total execution time: 0.0499
DEBUG - 2024-12-23 05:19:34 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:19:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:19:34 --> Total execution time: 0.0539
DEBUG - 2024-12-23 05:19:34 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:19:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:19:34 --> Total execution time: 0.0585
DEBUG - 2024-12-23 05:19:37 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:19:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:19:37 --> Total execution time: 0.0589
DEBUG - 2024-12-23 05:19:38 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:19:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:19:38 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-23 05:19:38 --> Total execution time: 0.0395
DEBUG - 2024-12-23 05:20:08 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:20:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:20:08 --> Total execution time: 0.0418
DEBUG - 2024-12-23 05:20:09 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:20:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:20:09 --> Total execution time: 0.0799
DEBUG - 2024-12-23 05:20:10 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:20:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:20:10 --> Total execution time: 0.0434
DEBUG - 2024-12-23 05:20:12 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:20:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:20:12 --> Total execution time: 0.0576
DEBUG - 2024-12-23 05:20:13 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:20:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:20:13 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-23 05:20:13 --> Total execution time: 0.0410
DEBUG - 2024-12-23 05:20:34 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:20:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:20:34 --> Total execution time: 0.0399
DEBUG - 2024-12-23 05:20:35 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:20:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:20:35 --> Total execution time: 0.0448
DEBUG - 2024-12-23 05:20:36 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:20:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:20:36 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-23 05:20:36 --> Total execution time: 0.0592
DEBUG - 2024-12-23 05:20:46 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:20:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:20:46 --> Total execution time: 0.0434
DEBUG - 2024-12-23 05:20:46 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:20:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:20:46 --> Total execution time: 0.0437
DEBUG - 2024-12-23 05:20:47 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:20:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:20:47 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-23 05:20:47 --> Total execution time: 0.0578
DEBUG - 2024-12-23 05:21:01 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:21:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:21:01 --> get_method_names called with term: Met
DEBUG - 2024-12-23 05:21:01 --> Returned methods: [{"idmethod":"00001","methodname":"Method 1"}]
DEBUG - 2024-12-23 05:21:01 --> Total execution time: 0.0401
DEBUG - 2024-12-23 05:21:03 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:21:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:21:03 --> get_method_names called with term: Meth
DEBUG - 2024-12-23 05:21:03 --> Returned methods: [{"idmethod":"00001","methodname":"Method 1"}]
DEBUG - 2024-12-23 05:21:03 --> Total execution time: 0.0386
DEBUG - 2024-12-23 05:21:08 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:21:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:21:08 --> UPDATE `es_sampletestservice` SET `testvalue` = '11', `methodName` = 'Method 1', `completetime` = '2024-12-23 05:21:08'
WHERE `id` = '903'
DEBUG - 2024-12-23 05:21:08 --> Total execution time: 0.0449
DEBUG - 2024-12-23 05:21:11 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:21:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:21:11 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-23 05:21:11 --> Total execution time: 0.0595
DEBUG - 2024-12-23 05:21:14 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:21:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:21:14 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NOT NULL
 LIMIT 10
DEBUG - 2024-12-23 05:21:14 --> Total execution time: 0.0566
DEBUG - 2024-12-23 05:21:18 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:21:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:21:18 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-23 05:21:18 --> Total execution time: 0.0456
DEBUG - 2024-12-23 05:21:22 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:21:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:21:22 --> Total execution time: 0.0393
DEBUG - 2024-12-23 05:21:23 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:21:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:21:23 --> Total execution time: 0.0500
DEBUG - 2024-12-23 05:21:23 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:21:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:21:23 --> Total execution time: 0.0439
DEBUG - 2024-12-23 05:21:26 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:21:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:21:26 --> Total execution time: 0.0568
DEBUG - 2024-12-23 05:21:28 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:21:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:21:28 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-23 05:21:28 --> Total execution time: 0.0529
DEBUG - 2024-12-23 05:21:39 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:21:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:21:39 --> Total execution time: 0.0712
DEBUG - 2024-12-23 05:21:40 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:21:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:21:40 --> Total execution time: 0.0759
DEBUG - 2024-12-23 05:21:40 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:21:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:21:40 --> Total execution time: 0.0584
DEBUG - 2024-12-23 05:21:43 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:21:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:21:43 --> Total execution time: 0.0414
DEBUG - 2024-12-23 05:21:44 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:21:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:21:44 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-23 05:21:44 --> Total execution time: 0.0573
DEBUG - 2024-12-23 05:22:11 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:22:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:22:11 --> Total execution time: 0.0737
DEBUG - 2024-12-23 05:22:12 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:22:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:22:12 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-23 05:22:12 --> Total execution time: 0.0394
DEBUG - 2024-12-23 05:22:18 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:22:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:22:18 --> Total execution time: 0.0475
DEBUG - 2024-12-23 05:22:18 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:22:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:22:18 --> Total execution time: 0.0513
DEBUG - 2024-12-23 05:22:19 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:22:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:22:19 --> Total execution time: 0.0607
DEBUG - 2024-12-23 05:22:22 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:22:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:22:22 --> Total execution time: 0.0570
DEBUG - 2024-12-23 05:22:23 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:22:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:22:23 --> Total execution time: 0.0469
DEBUG - 2024-12-23 05:22:23 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:22:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:22:23 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '003'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-23 05:22:23 --> Total execution time: 0.0734
DEBUG - 2024-12-23 05:22:27 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:22:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:22:27 --> Total execution time: 0.0400
DEBUG - 2024-12-23 05:22:27 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:22:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:22:27 --> Total execution time: 0.0601
DEBUG - 2024-12-23 05:22:28 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:22:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:22:28 --> Total execution time: 0.0447
DEBUG - 2024-12-23 05:22:31 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:22:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:22:31 --> Total execution time: 0.0466
DEBUG - 2024-12-23 05:22:32 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:22:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:22:32 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-23 05:22:32 --> Total execution time: 0.0564
DEBUG - 2024-12-23 05:22:42 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:22:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:22:43 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:22:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:22:43 --> Total execution time: 0.0544
DEBUG - 2024-12-23 05:22:44 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:22:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:22:44 --> Total execution time: 0.0358
DEBUG - 2024-12-23 05:22:44 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:22:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:22:44 --> Total execution time: 0.0514
DEBUG - 2024-12-23 05:22:45 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:22:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:22:45 --> Total execution time: 0.0529
DEBUG - 2024-12-23 05:22:49 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:22:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:22:49 --> Total execution time: 0.0358
DEBUG - 2024-12-23 05:22:51 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:22:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:22:51 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-23 05:22:51 --> Total execution time: 0.0577
DEBUG - 2024-12-23 05:22:57 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:22:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:22:58 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:22:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:22:58 --> Total execution time: 0.0326
DEBUG - 2024-12-23 05:26:09 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:26:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:26:09 --> Total execution time: 0.1702
DEBUG - 2024-12-23 05:26:10 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:26:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:26:10 --> Total execution time: 0.0748
DEBUG - 2024-12-23 05:26:11 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:26:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:26:11 --> Total execution time: 0.0830
DEBUG - 2024-12-23 05:26:12 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:26:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:26:12 --> Total execution time: 0.0436
DEBUG - 2024-12-23 05:26:13 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:26:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:26:13 --> Total execution time: 0.0560
DEBUG - 2024-12-23 05:26:14 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:26:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:26:14 --> Total execution time: 0.0553
DEBUG - 2024-12-23 05:26:25 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:26:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:26:25 --> Total execution time: 0.0556
DEBUG - 2024-12-23 05:26:26 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:26:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:26:26 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-23 05:26:26 --> Total execution time: 0.0399
DEBUG - 2024-12-23 05:26:30 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:26:30 --> Global POST, GET and COOKIE data sanitized
ERROR - 2024-12-23 05:26:31 --> Query error: Column 'id' in where clause is ambiguous - Invalid query: SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `id` = '903'
ORDER BY `sts`.`id` ASC
ERROR - 2024-12-23 05:26:31 --> Severity: Warning --> include(C:\xampp\htdocs\ESample\application\views\errors\html\error_db.php): Failed to open stream: No such file or directory C:\xampp\htdocs\ESample\system\core\Exceptions.php 183
ERROR - 2024-12-23 05:26:31 --> Severity: Warning --> include(): Failed opening 'C:\xampp\htdocs\ESample\application\views\errors\html\error_db.php' for inclusion (include_path='C:\xampp\php\PEAR') C:\xampp\htdocs\ESample\system\core\Exceptions.php 183
DEBUG - 2024-12-23 05:26:47 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:26:47 --> Global POST, GET and COOKIE data sanitized
ERROR - 2024-12-23 05:26:57 --> Query error: Column 'id' in where clause is ambiguous - Invalid query: SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `id` = '903'
ORDER BY `sts`.`id` ASC
ERROR - 2024-12-23 05:26:57 --> Severity: Warning --> include(C:\xampp\htdocs\ESample\application\views\errors\html\error_db.php): Failed to open stream: No such file or directory C:\xampp\htdocs\ESample\system\core\Exceptions.php 183
ERROR - 2024-12-23 05:26:57 --> Severity: Warning --> include(): Failed opening 'C:\xampp\htdocs\ESample\application\views\errors\html\error_db.php' for inclusion (include_path='C:\xampp\php\PEAR') C:\xampp\htdocs\ESample\system\core\Exceptions.php 183
DEBUG - 2024-12-23 05:29:04 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:29:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:29:12 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sts`.`id` = '903'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-23 05:29:14 --> SELECT *
FROM `es_testapp`
WHERE `testid` = '55'
DEBUG - 2024-12-23 05:29:17 --> UPDATE `es_sampletestservice` SET `confirmtime` = '2024-12-23 05:29:14', `userconfirm` = '001'
WHERE `id` = '903'
DEBUG - 2024-12-23 05:29:19 --> Total execution time: 15.5214
DEBUG - 2024-12-23 05:29:19 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:29:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:29:19 --> Total execution time: 0.0868
DEBUG - 2024-12-23 05:29:38 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:29:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:29:38 --> Total execution time: 0.0451
DEBUG - 2024-12-23 05:29:38 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:29:38 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:29:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:29:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:29:38 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-23 05:29:38 --> Total execution time: 0.0472
DEBUG - 2024-12-23 05:29:38 --> Total execution time: 0.0712
DEBUG - 2024-12-23 05:29:47 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:29:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:29:48 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:29:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:29:50 --> get_method_names called with term: Meth
DEBUG - 2024-12-23 05:29:50 --> Returned methods: [{"idmethod":"00001","methodname":"Method 1"}]
DEBUG - 2024-12-23 05:29:50 --> Total execution time: 3.0920
DEBUG - 2024-12-23 05:29:50 --> get_method_names called with term: Metho
DEBUG - 2024-12-23 05:29:50 --> Returned methods: [{"idmethod":"00001","methodname":"Method 1"}]
DEBUG - 2024-12-23 05:29:50 --> Total execution time: 2.3821
DEBUG - 2024-12-23 05:29:53 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:29:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:29:55 --> get_method_names called with term: Method
DEBUG - 2024-12-23 05:29:55 --> Returned methods: [{"idmethod":"00001","methodname":"Method 1"}]
DEBUG - 2024-12-23 05:29:55 --> Total execution time: 1.9627
DEBUG - 2024-12-23 05:29:58 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:29:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:30:03 --> UPDATE `es_sampletestservice` SET `testvalue` = '111', `methodName` = 'Method', `completetime` = '2024-12-23 05:30:02'
WHERE `id` = '904'
DEBUG - 2024-12-23 05:30:03 --> Total execution time: 4.7803
DEBUG - 2024-12-23 05:30:04 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:30:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:30:07 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '001'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-23 05:30:07 --> Total execution time: 2.8389
DEBUG - 2024-12-23 05:30:12 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:30:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:30:12 --> Total execution time: 0.0708
DEBUG - 2024-12-23 05:30:12 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:30:12 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:30:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:30:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:30:12 --> Total execution time: 0.0916
DEBUG - 2024-12-23 05:30:12 --> Total execution time: 0.1103
DEBUG - 2024-12-23 05:30:14 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:30:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:30:14 --> Total execution time: 0.0629
DEBUG - 2024-12-23 05:30:15 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:30:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:30:17 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-23 05:30:17 --> Total execution time: 2.5657
DEBUG - 2024-12-23 05:30:40 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:30:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:30:40 --> Total execution time: 0.0736
DEBUG - 2024-12-23 05:30:41 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:30:41 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:30:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:30:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:30:41 --> Total execution time: 0.0622
DEBUG - 2024-12-23 05:30:41 --> Total execution time: 0.0820
DEBUG - 2024-12-23 05:30:42 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:30:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:30:42 --> Total execution time: 0.0361
DEBUG - 2024-12-23 05:30:42 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:30:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:30:45 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-23 05:30:45 --> Total execution time: 2.7051
DEBUG - 2024-12-23 05:31:30 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:31:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:31:30 --> Total execution time: 0.0734
DEBUG - 2024-12-23 05:31:31 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:31:31 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:31:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:31:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:31:31 --> Total execution time: 0.0887
DEBUG - 2024-12-23 05:31:31 --> Total execution time: 0.1184
DEBUG - 2024-12-23 05:31:33 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:31:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:31:33 --> Total execution time: 0.0900
DEBUG - 2024-12-23 05:31:33 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:31:33 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:31:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:31:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:31:33 --> Total execution time: 0.0883
DEBUG - 2024-12-23 05:31:33 --> Total execution time: 0.1145
DEBUG - 2024-12-23 05:31:35 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:31:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:31:35 --> Total execution time: 0.0536
DEBUG - 2024-12-23 05:31:35 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:31:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:31:38 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-23 05:31:38 --> Total execution time: 2.4455
DEBUG - 2024-12-23 05:31:47 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:31:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:31:48 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:31:48 --> Global POST, GET and COOKIE data sanitized
ERROR - 2024-12-23 05:31:48 --> Severity: 8192 --> Return type of Google_Model::offsetExists($offset) should either be compatible with ArrayAccess::offsetExists(mixed $offset): bool, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice C:\xampp\htdocs\ESample\application\libraries\vendor\google\apiclient\src\Google\Model.php 249
ERROR - 2024-12-23 05:31:48 --> Severity: 8192 --> Return type of Google_Model::offsetGet($offset) should either be compatible with ArrayAccess::offsetGet(mixed $offset): mixed, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice C:\xampp\htdocs\ESample\application\libraries\vendor\google\apiclient\src\Google\Model.php 254
ERROR - 2024-12-23 05:31:48 --> Severity: 8192 --> Return type of Google_Model::offsetSet($offset, $value) should either be compatible with ArrayAccess::offsetSet(mixed $offset, mixed $value): void, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice C:\xampp\htdocs\ESample\application\libraries\vendor\google\apiclient\src\Google\Model.php 261
ERROR - 2024-12-23 05:31:48 --> Severity: 8192 --> Return type of Google_Model::offsetUnset($offset) should either be compatible with ArrayAccess::offsetUnset(mixed $offset): void, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice C:\xampp\htdocs\ESample\application\libraries\vendor\google\apiclient\src\Google\Model.php 271
ERROR - 2024-12-23 05:31:48 --> Severity: 8192 --> Return type of Google_Collection::current() should either be compatible with Iterator::current(): mixed, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice C:\xampp\htdocs\ESample\application\libraries\vendor\google\apiclient\src\Google\Collection.php 24
ERROR - 2024-12-23 05:31:48 --> Severity: 8192 --> Return type of Google_Collection::next() should either be compatible with Iterator::next(): void, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice C:\xampp\htdocs\ESample\application\libraries\vendor\google\apiclient\src\Google\Collection.php 40
ERROR - 2024-12-23 05:31:48 --> Severity: 8192 --> Return type of Google_Collection::key() should either be compatible with Iterator::key(): mixed, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice C:\xampp\htdocs\ESample\application\libraries\vendor\google\apiclient\src\Google\Collection.php 32
ERROR - 2024-12-23 05:31:48 --> Severity: 8192 --> Return type of Google_Collection::valid() should either be compatible with Iterator::valid(): bool, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice C:\xampp\htdocs\ESample\application\libraries\vendor\google\apiclient\src\Google\Collection.php 45
ERROR - 2024-12-23 05:31:48 --> Severity: 8192 --> Return type of Google_Collection::rewind() should either be compatible with Iterator::rewind(): void, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice C:\xampp\htdocs\ESample\application\libraries\vendor\google\apiclient\src\Google\Collection.php 16
ERROR - 2024-12-23 05:31:48 --> Severity: 8192 --> Return type of Google_Collection::count() should either be compatible with Countable::count(): int, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice C:\xampp\htdocs\ESample\application\libraries\vendor\google\apiclient\src\Google\Collection.php 51
DEBUG - 2024-12-23 05:31:48 --> Total execution time: 0.0974
DEBUG - 2024-12-23 05:31:54 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:31:54 --> No URI present. Default controller set.
DEBUG - 2024-12-23 05:31:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:31:54 --> Total execution time: 0.0545
DEBUG - 2024-12-23 05:31:59 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:31:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:32:01 --> Total execution time: 2.2387
DEBUG - 2024-12-23 05:32:02 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:32:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:32:02 --> Total execution time: 0.0789
DEBUG - 2024-12-23 05:32:02 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:32:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:32:02 --> Total execution time: 0.0993
DEBUG - 2024-12-23 05:32:05 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:32:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:32:05 --> Total execution time: 0.0943
DEBUG - 2024-12-23 05:32:05 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:32:05 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:32:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:32:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:32:05 --> Total execution time: 0.0844
DEBUG - 2024-12-23 05:32:05 --> Total execution time: 0.0950
DEBUG - 2024-12-23 05:32:07 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:32:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:32:07 --> Total execution time: 0.0611
DEBUG - 2024-12-23 05:32:07 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:32:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:32:09 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-23 05:32:09 --> Total execution time: 2.3186
DEBUG - 2024-12-23 05:32:15 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:32:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:32:15 --> Total execution time: 0.0524
DEBUG - 2024-12-23 05:32:16 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:32:16 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:32:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:32:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:32:16 --> Total execution time: 0.0677
DEBUG - 2024-12-23 05:32:16 --> Total execution time: 0.0965
DEBUG - 2024-12-23 05:32:18 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:32:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:32:18 --> Total execution time: 0.1015
DEBUG - 2024-12-23 05:32:18 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:32:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:32:20 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-23 05:32:20 --> Total execution time: 1.8831
DEBUG - 2024-12-23 05:34:24 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:34:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:34:24 --> Total execution time: 0.0666
DEBUG - 2024-12-23 05:34:25 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:34:25 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:34:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:34:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:34:25 --> Total execution time: 0.1016
DEBUG - 2024-12-23 05:34:25 --> Total execution time: 0.1229
DEBUG - 2024-12-23 05:34:27 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:34:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:34:27 --> Total execution time: 0.0786
DEBUG - 2024-12-23 05:34:28 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:34:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:34:30 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-23 05:34:30 --> Total execution time: 2.4835
DEBUG - 2024-12-23 05:36:28 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:36:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:36:28 --> Total execution time: 0.0762
DEBUG - 2024-12-23 05:36:29 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:36:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:36:31 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-23 05:36:31 --> Total execution time: 2.7039
DEBUG - 2024-12-23 05:50:30 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:50:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:50:30 --> Total execution time: 0.2343
DEBUG - 2024-12-23 05:50:31 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:50:31 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:50:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:50:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:50:31 --> Total execution time: 0.0597
DEBUG - 2024-12-23 05:50:31 --> Total execution time: 0.0789
DEBUG - 2024-12-23 05:50:32 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:50:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:50:32 --> Total execution time: 0.0695
DEBUG - 2024-12-23 05:50:33 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:50:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:50:37 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-23 05:50:37 --> Total execution time: 4.2155
DEBUG - 2024-12-23 05:52:01 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:52:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:52:02 --> Total execution time: 0.1365
DEBUG - 2024-12-23 05:52:02 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:52:02 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:52:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:52:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:52:02 --> Total execution time: 0.0786
DEBUG - 2024-12-23 05:52:02 --> Total execution time: 0.1015
DEBUG - 2024-12-23 05:52:04 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:52:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:52:04 --> Total execution time: 0.0743
DEBUG - 2024-12-23 05:52:04 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:52:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:52:14 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-23 05:52:14 --> Total execution time: 9.4017
DEBUG - 2024-12-23 05:52:24 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:52:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:52:29 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sts`.`id` = '904'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-23 05:52:32 --> SELECT *
FROM `es_testapp`
WHERE `testid` = '55'
DEBUG - 2024-12-23 05:52:32 --> UPDATE `es_sampletestservice` SET `confirmtime` = '2024-12-23 05:52:32', `userconfirm` = '001'
WHERE `id` = '904'
DEBUG - 2024-12-23 05:52:32 --> Total execution time: 8.6227
DEBUG - 2024-12-23 05:52:35 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:52:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:52:35 --> Total execution time: 0.0721
DEBUG - 2024-12-23 05:52:36 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:52:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:52:37 --> Total execution time: 0.0761
DEBUG - 2024-12-23 05:52:37 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:52:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:52:37 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-23 05:52:37 --> Total execution time: 0.0696
DEBUG - 2024-12-23 05:53:03 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:53:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:53:03 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:53:03 --> Global POST, GET and COOKIE data sanitized
ERROR - 2024-12-23 05:53:03 --> Severity: 8192 --> Return type of Google_Model::offsetExists($offset) should either be compatible with ArrayAccess::offsetExists(mixed $offset): bool, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice C:\xampp\htdocs\ESample\application\libraries\vendor\google\apiclient\src\Google\Model.php 249
ERROR - 2024-12-23 05:53:03 --> Severity: 8192 --> Return type of Google_Model::offsetGet($offset) should either be compatible with ArrayAccess::offsetGet(mixed $offset): mixed, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice C:\xampp\htdocs\ESample\application\libraries\vendor\google\apiclient\src\Google\Model.php 254
ERROR - 2024-12-23 05:53:03 --> Severity: 8192 --> Return type of Google_Model::offsetSet($offset, $value) should either be compatible with ArrayAccess::offsetSet(mixed $offset, mixed $value): void, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice C:\xampp\htdocs\ESample\application\libraries\vendor\google\apiclient\src\Google\Model.php 261
ERROR - 2024-12-23 05:53:03 --> Severity: 8192 --> Return type of Google_Model::offsetUnset($offset) should either be compatible with ArrayAccess::offsetUnset(mixed $offset): void, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice C:\xampp\htdocs\ESample\application\libraries\vendor\google\apiclient\src\Google\Model.php 271
ERROR - 2024-12-23 05:53:03 --> Severity: 8192 --> Return type of Google_Collection::current() should either be compatible with Iterator::current(): mixed, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice C:\xampp\htdocs\ESample\application\libraries\vendor\google\apiclient\src\Google\Collection.php 24
ERROR - 2024-12-23 05:53:03 --> Severity: 8192 --> Return type of Google_Collection::next() should either be compatible with Iterator::next(): void, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice C:\xampp\htdocs\ESample\application\libraries\vendor\google\apiclient\src\Google\Collection.php 40
ERROR - 2024-12-23 05:53:03 --> Severity: 8192 --> Return type of Google_Collection::key() should either be compatible with Iterator::key(): mixed, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice C:\xampp\htdocs\ESample\application\libraries\vendor\google\apiclient\src\Google\Collection.php 32
ERROR - 2024-12-23 05:53:03 --> Severity: 8192 --> Return type of Google_Collection::valid() should either be compatible with Iterator::valid(): bool, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice C:\xampp\htdocs\ESample\application\libraries\vendor\google\apiclient\src\Google\Collection.php 45
ERROR - 2024-12-23 05:53:03 --> Severity: 8192 --> Return type of Google_Collection::rewind() should either be compatible with Iterator::rewind(): void, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice C:\xampp\htdocs\ESample\application\libraries\vendor\google\apiclient\src\Google\Collection.php 16
ERROR - 2024-12-23 05:53:03 --> Severity: 8192 --> Return type of Google_Collection::count() should either be compatible with Countable::count(): int, or the #[\ReturnTypeWillChange] attribute should be used to temporarily suppress the notice C:\xampp\htdocs\ESample\application\libraries\vendor\google\apiclient\src\Google\Collection.php 51
DEBUG - 2024-12-23 05:53:03 --> Total execution time: 0.0789
DEBUG - 2024-12-23 05:53:07 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:53:07 --> No URI present. Default controller set.
DEBUG - 2024-12-23 05:53:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:53:07 --> Total execution time: 0.0398
DEBUG - 2024-12-23 05:53:15 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:53:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:53:19 --> Total execution time: 3.1034
DEBUG - 2024-12-23 05:53:19 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:53:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:53:19 --> Total execution time: 0.0615
DEBUG - 2024-12-23 05:53:19 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:53:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:53:20 --> Total execution time: 0.0717
DEBUG - 2024-12-23 05:53:22 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:53:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:53:22 --> Total execution time: 0.0634
DEBUG - 2024-12-23 05:53:22 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:53:22 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:53:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:53:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:53:22 --> Total execution time: 0.0848
DEBUG - 2024-12-23 05:53:22 --> Total execution time: 0.1177
DEBUG - 2024-12-23 05:53:24 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:53:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:53:24 --> Total execution time: 0.0410
DEBUG - 2024-12-23 05:53:25 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:53:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:53:25 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-23 05:53:25 --> Total execution time: 0.0430
DEBUG - 2024-12-23 05:53:36 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:53:36 --> Global POST, GET and COOKIE data sanitized
ERROR - 2024-12-23 05:53:36 --> 404 Page Not Found: sample/Samplecontrol/approveReview
ERROR - 2024-12-23 05:53:36 --> Severity: Warning --> include(C:\xampp\htdocs\ESample\application\views\errors\html\error_404.php): Failed to open stream: No such file or directory C:\xampp\htdocs\ESample\system\core\Exceptions.php 183
ERROR - 2024-12-23 05:53:36 --> Severity: Warning --> include(): Failed opening 'C:\xampp\htdocs\ESample\application\views\errors\html\error_404.php' for inclusion (include_path='C:\xampp\php\PEAR') C:\xampp\htdocs\ESample\system\core\Exceptions.php 183
DEBUG - 2024-12-23 05:55:18 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:55:18 --> Global POST, GET and COOKIE data sanitized
ERROR - 2024-12-23 05:55:22 --> Severity: Compile Error --> Cannot redeclare samplecontrol::approveResult() C:\xampp\htdocs\ESample\application\controllers\Sample\samplecontrol.php 859
DEBUG - 2024-12-23 05:57:07 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:57:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:57:11 --> SELECT *
FROM `es_testapp`
WHERE `testid` = '55'
DEBUG - 2024-12-23 05:57:24 --> Total execution time: 16.2975
DEBUG - 2024-12-23 05:57:26 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:57:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:57:26 --> Total execution time: 0.1029
DEBUG - 2024-12-23 05:57:28 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:57:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:57:28 --> Total execution time: 0.0890
DEBUG - 2024-12-23 05:57:28 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 05:57:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 05:57:28 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-23 05:57:28 --> Total execution time: 0.0487
DEBUG - 2024-12-23 06:01:28 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 06:01:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 06:01:28 --> Total execution time: 0.0726
DEBUG - 2024-12-23 06:01:28 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 06:01:28 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 06:01:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 06:01:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 06:01:29 --> Total execution time: 0.1440
DEBUG - 2024-12-23 06:01:29 --> Total execution time: 0.2377
DEBUG - 2024-12-23 06:01:30 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 06:01:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 06:01:30 --> Total execution time: 0.0787
DEBUG - 2024-12-23 06:01:30 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 06:01:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 06:01:30 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-23 06:01:30 --> Total execution time: 0.0814
DEBUG - 2024-12-23 06:04:32 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 06:04:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 06:04:33 --> Total execution time: 0.1842
DEBUG - 2024-12-23 06:04:33 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 06:04:33 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 06:04:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 06:04:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 06:04:33 --> Total execution time: 0.0624
DEBUG - 2024-12-23 06:04:33 --> Total execution time: 0.0837
DEBUG - 2024-12-23 06:04:36 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 06:04:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 06:04:36 --> Total execution time: 0.0616
DEBUG - 2024-12-23 06:04:36 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 06:04:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 06:04:36 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-23 06:04:36 --> Total execution time: 0.0433
DEBUG - 2024-12-23 06:06:42 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 06:06:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 06:06:42 --> Total execution time: 0.0665
DEBUG - 2024-12-23 06:06:42 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 06:06:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 06:06:42 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-23 06:06:42 --> Total execution time: 0.0794
DEBUG - 2024-12-23 06:06:47 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 06:06:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 06:06:47 --> Total execution time: 0.0514
DEBUG - 2024-12-23 06:06:47 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 06:06:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 06:06:47 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-23 06:06:47 --> Total execution time: 0.0799
DEBUG - 2024-12-23 06:06:50 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 06:06:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 06:06:50 --> Total execution time: 0.0337
DEBUG - 2024-12-23 06:06:50 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 06:06:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 06:06:50 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-23 06:06:50 --> Total execution time: 0.0583
DEBUG - 2024-12-23 06:06:53 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 06:06:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 06:06:53 --> Total execution time: 0.0550
DEBUG - 2024-12-23 06:06:53 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 06:06:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 06:06:53 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-23 06:06:53 --> Total execution time: 0.0606
DEBUG - 2024-12-23 06:06:58 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 06:06:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 06:06:58 --> Total execution time: 0.0650
DEBUG - 2024-12-23 06:06:58 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 06:06:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 06:06:58 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-23 06:06:58 --> Total execution time: 0.0779
DEBUG - 2024-12-23 06:07:03 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 06:07:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 06:07:03 --> Total execution time: 0.0709
DEBUG - 2024-12-23 06:07:03 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 06:07:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 06:07:03 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-23 06:07:03 --> Total execution time: 0.0742
DEBUG - 2024-12-23 06:09:19 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 06:09:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 06:09:19 --> Total execution time: 0.0592
DEBUG - 2024-12-23 06:09:19 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 06:09:19 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 06:09:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 06:09:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 06:09:19 --> Total execution time: 0.0877
DEBUG - 2024-12-23 06:09:19 --> Total execution time: 0.1993
DEBUG - 2024-12-23 06:09:33 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 06:09:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 06:09:33 --> Total execution time: 0.0512
DEBUG - 2024-12-23 06:09:33 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 06:09:33 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 06:09:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 06:09:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 06:09:33 --> Total execution time: 0.0980
DEBUG - 2024-12-23 06:09:33 --> Total execution time: 0.1267
DEBUG - 2024-12-23 06:09:45 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 06:09:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 06:09:45 --> Total execution time: 0.0769
DEBUG - 2024-12-23 06:09:45 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 06:09:45 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 06:09:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 06:09:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 06:09:45 --> Total execution time: 0.0652
DEBUG - 2024-12-23 06:09:45 --> Total execution time: 0.0951
DEBUG - 2024-12-23 06:09:51 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 06:09:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 06:09:51 --> Total execution time: 0.0869
DEBUG - 2024-12-23 06:09:52 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 06:09:52 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 06:09:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 06:09:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 06:09:52 --> Total execution time: 0.0936
DEBUG - 2024-12-23 06:10:34 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 06:10:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 06:10:34 --> Total execution time: 0.0620
DEBUG - 2024-12-23 06:10:35 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 06:10:35 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 06:10:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 06:10:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 06:10:35 --> Total execution time: 0.1203
ERROR - 2024-12-23 06:10:35 --> Query error: Unknown column 'reviwer_confirm' in 'where clause' - Invalid query: SELECT *
FROM `es_testapp` `t`
WHERE `testActive` = '1'
AND `scientist_id` = '003' OR `reviewer_id` = '003'
AND `reviwer_confirm` IS NOT NULL
ORDER BY `testid` DESC
 LIMIT 10
ERROR - 2024-12-23 06:10:35 --> Severity: Warning --> include(C:\xampp\htdocs\ESample\application\views\errors\html\error_db.php): Failed to open stream: No such file or directory C:\xampp\htdocs\ESample\system\core\Exceptions.php 183
ERROR - 2024-12-23 06:10:35 --> Severity: Warning --> include(): Failed opening 'C:\xampp\htdocs\ESample\application\views\errors\html\error_db.php' for inclusion (include_path='C:\xampp\php\PEAR') C:\xampp\htdocs\ESample\system\core\Exceptions.php 183
DEBUG - 2024-12-23 06:10:38 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 06:10:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 06:10:38 --> Total execution time: 0.0837
DEBUG - 2024-12-23 06:10:39 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 06:10:39 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 06:10:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 06:10:39 --> Global POST, GET and COOKIE data sanitized
ERROR - 2024-12-23 06:10:39 --> Query error: Unknown column 'reviwer_confirm' in 'where clause' - Invalid query: SELECT *
FROM `es_testapp` `t`
WHERE `testActive` = '1'
AND `scientist_id` = '003' OR `reviewer_id` = '003'
AND `reviwer_confirm` IS NOT NULL
ORDER BY `testid` DESC
 LIMIT 10
ERROR - 2024-12-23 06:10:39 --> Severity: Warning --> include(C:\xampp\htdocs\ESample\application\views\errors\html\error_db.php): Failed to open stream: No such file or directory C:\xampp\htdocs\ESample\system\core\Exceptions.php 183
ERROR - 2024-12-23 06:10:39 --> Severity: Warning --> include(): Failed opening 'C:\xampp\htdocs\ESample\application\views\errors\html\error_db.php' for inclusion (include_path='C:\xampp\php\PEAR') C:\xampp\htdocs\ESample\system\core\Exceptions.php 183
DEBUG - 2024-12-23 06:10:39 --> Total execution time: 0.0990
DEBUG - 2024-12-23 06:10:48 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 06:10:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 06:10:48 --> Total execution time: 0.0812
DEBUG - 2024-12-23 06:10:48 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 06:10:48 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 06:10:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 06:10:48 --> Global POST, GET and COOKIE data sanitized
ERROR - 2024-12-23 06:10:48 --> Query error: Unknown column 'reviwer_confirm' in 'where clause' - Invalid query: SELECT *
FROM `es_testapp` `t`
WHERE `testActive` = '1'
AND `scientist_id` = '003' OR `reviewer_id` = '003'
AND `reviwer_confirm` IS NOT NULL
ORDER BY `testid` DESC
 LIMIT 10
ERROR - 2024-12-23 06:10:48 --> Severity: Warning --> include(C:\xampp\htdocs\ESample\application\views\errors\html\error_db.php): Failed to open stream: No such file or directory C:\xampp\htdocs\ESample\system\core\Exceptions.php 183
ERROR - 2024-12-23 06:10:48 --> Severity: Warning --> include(): Failed opening 'C:\xampp\htdocs\ESample\application\views\errors\html\error_db.php' for inclusion (include_path='C:\xampp\php\PEAR') C:\xampp\htdocs\ESample\system\core\Exceptions.php 183
DEBUG - 2024-12-23 06:10:48 --> Total execution time: 0.0876
DEBUG - 2024-12-23 06:11:09 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 06:11:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 06:11:09 --> Total execution time: 0.0738
DEBUG - 2024-12-23 06:11:10 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 06:11:10 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 06:11:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 06:11:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 06:11:10 --> Total execution time: 0.1053
DEBUG - 2024-12-23 06:11:10 --> Total execution time: 0.1885
DEBUG - 2024-12-23 06:11:14 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 06:11:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 06:11:14 --> Total execution time: 0.0726
DEBUG - 2024-12-23 06:11:15 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 06:11:15 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 06:11:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 06:11:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 06:11:15 --> Total execution time: 0.0853
DEBUG - 2024-12-23 06:11:28 --> Total execution time: 12.9303
DEBUG - 2024-12-23 06:11:48 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 06:11:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 06:11:48 --> Total execution time: 0.0602
DEBUG - 2024-12-23 06:11:49 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 06:11:49 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 06:11:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 06:11:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 06:11:49 --> Total execution time: 0.1048
ERROR - 2024-12-23 06:11:51 --> Query error: Unknown column 'reviwer_confirm' in 'where clause' - Invalid query: SELECT *
FROM `es_testapp` `t`
WHERE `testActive` = '1'
AND `scientist_id` = '003' OR `reviewer_id` = '003'
AND `reviwer_confirm` IS NOT NULL
ORDER BY `testid` DESC
 LIMIT 10
ERROR - 2024-12-23 06:11:51 --> Severity: Warning --> include(C:\xampp\htdocs\ESample\application\views\errors\html\error_db.php): Failed to open stream: No such file or directory C:\xampp\htdocs\ESample\system\core\Exceptions.php 183
ERROR - 2024-12-23 06:11:51 --> Severity: Warning --> include(): Failed opening 'C:\xampp\htdocs\ESample\application\views\errors\html\error_db.php' for inclusion (include_path='C:\xampp\php\PEAR') C:\xampp\htdocs\ESample\system\core\Exceptions.php 183
DEBUG - 2024-12-23 06:12:56 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 06:12:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 06:12:57 --> Total execution time: 0.0739
DEBUG - 2024-12-23 06:12:57 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 06:12:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 06:12:57 --> Total execution time: 0.0735
DEBUG - 2024-12-23 06:12:57 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 06:12:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 06:12:59 --> Total execution time: 1.8151
DEBUG - 2024-12-23 06:13:22 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 06:13:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 06:13:22 --> Total execution time: 0.0619
DEBUG - 2024-12-23 06:13:22 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 06:13:22 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 06:13:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 06:13:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 06:13:22 --> Total execution time: 0.1450
DEBUG - 2024-12-23 06:13:22 --> Total execution time: 0.1632
DEBUG - 2024-12-23 06:13:25 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 06:13:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 06:13:25 --> Total execution time: 0.0583
DEBUG - 2024-12-23 06:13:25 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 06:13:25 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 06:13:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 06:13:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 06:13:25 --> Total execution time: 0.0839
DEBUG - 2024-12-23 06:13:29 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '003'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-23 06:13:29 --> Total execution time: 3.4275
DEBUG - 2024-12-23 06:13:32 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 06:13:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 06:13:35 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '003'
AND `sts`.`completetime` IS NOT NULL
 LIMIT 10
DEBUG - 2024-12-23 06:13:35 --> Total execution time: 2.8201
DEBUG - 2024-12-23 06:13:46 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 06:13:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 06:13:46 --> Total execution time: 0.0764
DEBUG - 2024-12-23 06:13:46 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 06:13:46 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 06:13:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 06:13:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 06:13:46 --> Total execution time: 0.0855
DEBUG - 2024-12-23 06:13:46 --> Total execution time: 0.1122
DEBUG - 2024-12-23 08:16:44 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 08:16:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 08:16:45 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 08:16:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 08:16:45 --> Total execution time: 0.0423
DEBUG - 2024-12-23 08:16:46 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 08:16:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 08:16:49 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 08:16:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 08:16:54 --> Total execution time: 7.4174
DEBUG - 2024-12-23 08:16:54 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 08:16:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 08:16:56 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 08:16:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 08:16:56 --> Total execution time: 0.0726
DEBUG - 2024-12-23 08:16:58 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 08:16:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 08:16:58 --> Total execution time: 0.0428
DEBUG - 2024-12-23 08:17:01 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 08:17:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 08:17:01 --> Total execution time: 0.0371
DEBUG - 2024-12-23 08:17:02 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 08:17:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 08:17:02 --> Total execution time: 0.0628
DEBUG - 2024-12-23 08:17:05 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 08:17:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 08:17:05 --> Total execution time: 0.0712
DEBUG - 2024-12-23 08:17:05 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 08:17:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 08:17:05 --> Total execution time: 0.0688
DEBUG - 2024-12-23 08:17:06 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 08:17:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 08:17:06 --> Total execution time: 0.0528
DEBUG - 2024-12-23 08:17:10 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 08:17:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 08:17:10 --> Total execution time: 0.0571
DEBUG - 2024-12-23 08:17:10 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 08:17:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 08:17:10 --> Total execution time: 0.0501
DEBUG - 2024-12-23 08:17:11 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 08:17:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 08:17:11 --> SELECT `ta`.`docnumber`, `st`.`operationnumber`, `st`.`samplename`, `s`.`method`, `s`.`service`, `ta`.`senderAgencyname`, `sts`.`assigntime`, `sts`.`id`, `sts`.`testvalue`, `sts`.`unit`, `sts`.`methodName`, `sts`.`completetime`, `sts`.`confirmtime`, `sts`.`userconfirm`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
JOIN `es_sampletest` `st` ON `sts`.`sampleid` = `st`.`sampleid`
JOIN `es_testapp` `ta` ON `st`.`testid` = `ta`.`testid`
WHERE `sts`.`userrespon` = '003'
AND `sts`.`completetime` IS NULL
 LIMIT 10
DEBUG - 2024-12-23 08:17:11 --> Total execution time: 0.0741
DEBUG - 2024-12-23 08:17:14 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 08:17:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 08:17:14 --> Total execution time: 0.0549
DEBUG - 2024-12-23 08:17:15 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 08:17:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 08:17:15 --> Total execution time: 0.1088
DEBUG - 2024-12-23 08:17:15 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 08:17:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 08:17:16 --> Total execution time: 0.0535
DEBUG - 2024-12-23 08:17:24 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 08:17:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 08:17:24 --> Total execution time: 0.0552
DEBUG - 2024-12-23 08:17:25 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 08:17:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 08:17:25 --> Total execution time: 0.0700
DEBUG - 2024-12-23 08:17:25 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 08:17:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 08:17:25 --> Total execution time: 0.0593
DEBUG - 2024-12-23 08:17:31 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 08:17:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 08:17:31 --> Total execution time: 0.0506
DEBUG - 2024-12-23 08:17:32 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 08:17:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 08:17:32 --> Total execution time: 0.0630
DEBUG - 2024-12-23 08:17:33 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 08:17:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 08:17:33 --> Total execution time: 0.0455
DEBUG - 2024-12-23 08:17:57 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 08:17:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 08:17:58 --> Total execution time: 0.0519
DEBUG - 2024-12-23 08:17:58 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 08:17:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 08:17:58 --> Total execution time: 0.0753
DEBUG - 2024-12-23 08:17:59 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 08:17:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 08:17:59 --> Total execution time: 0.0394
DEBUG - 2024-12-23 08:18:02 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 08:18:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 08:18:02 --> Total execution time: 0.0548
DEBUG - 2024-12-23 08:18:03 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 08:18:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 08:18:03 --> SELECT `sts`.*, `s`.`service`, `s`.`method`, `u1`.`gf_name` as `assign_fname`, `u1`.`gl_name` as `assign_lname`, `u2`.`gf_name` as `respon_fname`, `u2`.`gl_name` as `respon_lname`, `u3`.`gf_name` as `confirm_fname`, `u3`.`gl_name` as `confirm_lname`, `sts`.`assigntime`, `sts`.`completetime`, `sts`.`confirmtime`
FROM `es_sampletestservice` `sts`
JOIN `es_service` `s` ON `sts`.`serviceid` = `s`.`id`
LEFT JOIN `es_user` `u1` ON `sts`.`userassign` = `u1`.`uid`
LEFT JOIN `es_user` `u2` ON `sts`.`userrespon` = `u2`.`uid`
LEFT JOIN `es_user` `u3` ON `sts`.`userconfirm` = `u3`.`uid`
WHERE `sampleid` = '71'
ORDER BY `sts`.`id` ASC
DEBUG - 2024-12-23 08:18:03 --> Total execution time: 0.0559
DEBUG - 2024-12-23 08:24:51 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 08:24:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 08:24:52 --> Total execution time: 0.0519
DEBUG - 2024-12-23 08:24:52 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 08:24:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 08:24:52 --> Total execution time: 0.0675
DEBUG - 2024-12-23 08:24:53 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 08:24:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 08:24:53 --> Total execution time: 0.0483
DEBUG - 2024-12-23 08:25:37 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 08:25:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 08:25:37 --> Total execution time: 0.0830
DEBUG - 2024-12-23 08:25:37 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 08:25:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 08:25:37 --> Total execution time: 0.0556
DEBUG - 2024-12-23 08:25:38 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 08:25:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 08:25:38 --> Total execution time: 0.0756
DEBUG - 2024-12-23 08:48:21 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 08:48:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 08:48:21 --> Total execution time: 0.1700
DEBUG - 2024-12-23 08:48:22 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 08:48:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 08:48:22 --> Total execution time: 0.0804
DEBUG - 2024-12-23 08:48:22 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 08:48:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 08:48:22 --> Total execution time: 0.0726
DEBUG - 2024-12-23 08:48:41 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 08:48:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 08:48:41 --> Total execution time: 0.0995
DEBUG - 2024-12-23 08:48:41 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 08:48:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 08:48:41 --> Total execution time: 0.0520
DEBUG - 2024-12-23 08:48:42 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 08:48:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 08:48:42 --> Total execution time: 0.0543
DEBUG - 2024-12-23 08:50:58 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 08:50:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 08:50:58 --> Total execution time: 0.1344
DEBUG - 2024-12-23 08:50:59 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 08:50:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 08:50:59 --> Total execution time: 0.0553
DEBUG - 2024-12-23 08:51:00 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 08:51:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 08:51:00 --> Total execution time: 0.0435
DEBUG - 2024-12-23 09:20:42 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 09:20:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 09:20:42 --> Total execution time: 0.1069
DEBUG - 2024-12-23 09:20:43 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 09:20:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 09:20:43 --> Total execution time: 0.0692
DEBUG - 2024-12-23 09:20:45 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 09:20:45 --> Global POST, GET and COOKIE data sanitized
ERROR - 2024-12-23 09:20:45 --> 404 Page Not Found: sample/Samplecontrol/getTestStatus
ERROR - 2024-12-23 09:20:45 --> Severity: Warning --> include(C:\xampp\htdocs\ESample\application\views\errors\html\error_404.php): Failed to open stream: No such file or directory C:\xampp\htdocs\ESample\system\core\Exceptions.php 183
ERROR - 2024-12-23 09:20:45 --> Severity: Warning --> include(): Failed opening 'C:\xampp\htdocs\ESample\application\views\errors\html\error_404.php' for inclusion (include_path='C:\xampp\php\PEAR') C:\xampp\htdocs\ESample\system\core\Exceptions.php 183
DEBUG - 2024-12-23 09:21:33 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 09:21:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 09:21:33 --> Total execution time: 0.0527
DEBUG - 2024-12-23 09:21:33 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 09:21:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 09:21:33 --> Total execution time: 0.0728
DEBUG - 2024-12-23 09:21:34 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 09:21:34 --> Global POST, GET and COOKIE data sanitized
ERROR - 2024-12-23 09:21:34 --> 404 Page Not Found: sample/Samplecontrol/getTestStatus
ERROR - 2024-12-23 09:21:34 --> Severity: Warning --> include(C:\xampp\htdocs\ESample\application\views\errors\html\error_404.php): Failed to open stream: No such file or directory C:\xampp\htdocs\ESample\system\core\Exceptions.php 183
ERROR - 2024-12-23 09:21:34 --> Severity: Warning --> include(): Failed opening 'C:\xampp\htdocs\ESample\application\views\errors\html\error_404.php' for inclusion (include_path='C:\xampp\php\PEAR') C:\xampp\htdocs\ESample\system\core\Exceptions.php 183
DEBUG - 2024-12-23 09:21:39 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 09:21:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 09:21:40 --> Total execution time: 0.0563
DEBUG - 2024-12-23 09:21:40 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 09:21:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 09:21:40 --> Total execution time: 0.0498
DEBUG - 2024-12-23 09:21:41 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 09:21:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 09:21:41 --> Total execution time: 0.0753
DEBUG - 2024-12-23 09:21:44 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 09:21:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 09:21:44 --> Total execution time: 0.0346
DEBUG - 2024-12-23 09:21:44 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 09:21:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 09:21:44 --> Total execution time: 0.0567
DEBUG - 2024-12-23 09:21:45 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 09:21:45 --> Global POST, GET and COOKIE data sanitized
ERROR - 2024-12-23 09:21:45 --> 404 Page Not Found: sample/Samplecontrol/getTestStatus
ERROR - 2024-12-23 09:21:45 --> Severity: Warning --> include(C:\xampp\htdocs\ESample\application\views\errors\html\error_404.php): Failed to open stream: No such file or directory C:\xampp\htdocs\ESample\system\core\Exceptions.php 183
ERROR - 2024-12-23 09:21:45 --> Severity: Warning --> include(): Failed opening 'C:\xampp\htdocs\ESample\application\views\errors\html\error_404.php' for inclusion (include_path='C:\xampp\php\PEAR') C:\xampp\htdocs\ESample\system\core\Exceptions.php 183
DEBUG - 2024-12-23 09:24:49 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 09:24:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 09:24:49 --> Total execution time: 0.1095
DEBUG - 2024-12-23 09:24:49 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 09:24:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 09:24:49 --> Total execution time: 0.0655
DEBUG - 2024-12-23 09:25:11 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 09:25:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 09:25:11 --> Total execution time: 0.0531
DEBUG - 2024-12-23 09:25:12 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 09:25:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 09:25:12 --> Total execution time: 0.0568
DEBUG - 2024-12-23 09:25:26 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 09:25:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 09:25:26 --> Total execution time: 0.1369
DEBUG - 2024-12-23 09:25:41 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 09:25:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 09:25:41 --> Total execution time: 0.0821
DEBUG - 2024-12-23 09:25:42 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 09:25:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 09:25:42 --> Total execution time: 0.0443
DEBUG - 2024-12-23 09:25:42 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 09:25:42 --> Global POST, GET and COOKIE data sanitized
ERROR - 2024-12-23 09:25:42 --> 404 Page Not Found: sample/Samplecontrol/getTestStatus
ERROR - 2024-12-23 09:25:42 --> Severity: Warning --> include(C:\xampp\htdocs\ESample\application\views\errors\html\error_404.php): Failed to open stream: No such file or directory C:\xampp\htdocs\ESample\system\core\Exceptions.php 183
ERROR - 2024-12-23 09:25:42 --> Severity: Warning --> include(): Failed opening 'C:\xampp\htdocs\ESample\application\views\errors\html\error_404.php' for inclusion (include_path='C:\xampp\php\PEAR') C:\xampp\htdocs\ESample\system\core\Exceptions.php 183
DEBUG - 2024-12-23 09:26:42 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 09:26:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 09:26:42 --> Total execution time: 0.0441
DEBUG - 2024-12-23 09:26:43 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 09:26:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 09:26:43 --> Total execution time: 0.0750
DEBUG - 2024-12-23 09:26:43 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 09:26:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 09:26:44 --> Total execution time: 0.1965
DEBUG - 2024-12-23 09:28:44 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 09:28:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 09:28:44 --> Total execution time: 0.0850
DEBUG - 2024-12-23 09:28:45 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 09:28:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 09:28:45 --> Total execution time: 0.0607
DEBUG - 2024-12-23 09:28:45 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 09:28:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 09:28:45 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 09:28:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 09:28:45 --> Status Counts: {"pending_assignment":0,"pending_results":0,"pending_confirmation":0,"pending_review":0}
DEBUG - 2024-12-23 09:28:45 --> Total execution time: 0.2854
DEBUG - 2024-12-23 09:28:46 --> Total execution time: 0.5901
DEBUG - 2024-12-23 09:28:47 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 09:28:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 09:28:47 --> Status Counts: {"pending_assignment":0,"pending_results":0,"pending_confirmation":0,"pending_review":0}
DEBUG - 2024-12-23 09:28:47 --> Total execution time: 0.0378
DEBUG - 2024-12-23 09:29:38 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 09:29:38 --> Global POST, GET and COOKIE data sanitized
ERROR - 2024-12-23 09:29:38 --> 404 Page Not Found: sample/Samplecontrol/getTestStatusDetails
ERROR - 2024-12-23 09:29:38 --> Severity: Warning --> include(C:\xampp\htdocs\ESample\application\views\errors\html\error_404.php): Failed to open stream: No such file or directory C:\xampp\htdocs\ESample\system\core\Exceptions.php 183
ERROR - 2024-12-23 09:29:38 --> Severity: Warning --> include(): Failed opening 'C:\xampp\htdocs\ESample\application\views\errors\html\error_404.php' for inclusion (include_path='C:\xampp\php\PEAR') C:\xampp\htdocs\ESample\system\core\Exceptions.php 183
DEBUG - 2024-12-23 09:32:29 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 09:32:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 09:32:29 --> Total execution time: 0.0704
DEBUG - 2024-12-23 09:32:30 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 09:32:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 09:32:30 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 09:32:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 09:32:30 --> Total execution time: 0.0527
DEBUG - 2024-12-23 09:32:30 --> UTF-8 Support Enabled
DEBUG - 2024-12-23 09:32:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2024-12-23 09:32:31 --> Status Counts: {"pending_assignment":0,"pending_results":0,"pending_confirmation":0,"pending_review":0}
DEBUG - 2024-12-23 09:32:31 --> Total execution time: 0.4530
DEBUG - 2024-12-23 09:32:31 --> Total execution time: 0.7328
