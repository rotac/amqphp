<?php
 namespace amqphp\protocol\v0_9_1\queue; class DeleteIfEmptyField extends \amqphp\protocol\v0_9_1\BitDomain implements \amqphp\protocol\abstrakt\XmlSpecField { function getSpecFieldName() { return 'if-empty'; } function getSpecFieldDomain() { return 'bit'; } }