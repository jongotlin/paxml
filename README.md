# paxml
Create Paxml documents

```php
$paxmlGenerator = new PaxmlGenerator();
$paxml = new Paxml();
$header = new Header();
$paxml->setHeader($header);
$salaryTransaction = new SalaryTransaction('1', '1122334455', '123', 1.2);
$salaryTransaction->setUnitPrice(1000);
$paxml->addSalaryTransaction($salaryTransaction);

$paxmlDocument = $paxmlGenerator->createPaxmlDocument($paxml);
echo $paxmlDocument->saveXML();
```
