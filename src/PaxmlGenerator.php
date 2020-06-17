<?php

namespace JGI\Paxml;

use JGI\Paxml\Model\Paxml;

class PaxmlGenerator
{
    /**
     * @param Paxml $paxml
     *
     * @return PaxmlDocument
     */
    public function createPaxmlDocument(Paxml $paxml): PaxmlDocument
    {
        $paxmlDocument = new PaxmlDocument();

        $paxmlDocument->encoding = 'utf-8';
        $paxmlDocument->xmlVersion = '1.0';
        $paxmlDocument->formatOutput = true;

        $root = $paxmlDocument->createElement('paxml');
        $root->setAttributeNodeNS(new \DOMAttr('xmlns:xsi', 'http://www.w3.org/2001/XMLSchema-instance'));
        $root->setAttributeNodeNS(new \DOMAttr('xsi:noNamespaceSchemaLocation', 'http://www.paxml.se/2.0/paxml.xsd'));

        if ($paxml->getHeader()) {
            $header = $paxmlDocument->createElement('header');
            $header->appendChild($paxmlDocument->createElement('version', $paxml->getHeader()->getVersion()));
            if ($paxml->getHeader()->getDate()) {
                $header->appendChild($paxmlDocument->createElement('datum', $paxml->getHeader()->getDate()->format('Y-m-d\TH:i:s')));
            }
            if ($paxml->getHeader()->getFormat()) {
                $header->appendChild($paxmlDocument->createElement('format', $paxml->getHeader()->getFormat()));
            }
            $root->appendChild($header);
        }
        if ($paxml->getSalaryTransactions()) {
            $salaryTransactionsElement = $paxmlDocument->createElement('lonetransaktioner');
            foreach ($paxml->getSalaryTransactions() as $salaryTransaction) {
                $salaryTransactionElement = $paxmlDocument->createElement('lonetrans');
                $salaryTransactionElement->setAttribute('persnr', $salaryTransaction->getIdentityNumber());
                $salaryTransactionElement->appendChild($paxmlDocument->createElement('lonart', $salaryTransaction->getArticle()));
                $salaryTransactionElement->appendChild($paxmlDocument->createElement('antal', $salaryTransaction->getQuantity()));
                $salaryTransactionElement->appendChild($paxmlDocument->createElement('apris', $salaryTransaction->getUnitPrice() / 100));
                if ($salaryTransaction->getDate()) {
                    $salaryTransactionElement->appendChild(
                        $paxmlDocument->createElement('datum', $salaryTransaction->getDate()->format('Y-m-d'))
                    );
                }
                $salaryTransactionsElement->appendChild($salaryTransactionElement);
            }
            $root->appendChild($salaryTransactionsElement);
        }
        if ($paxml->getPersons()) {
            $personsElement = $paxmlDocument->createElement('personal');
            foreach ($paxml->getPersons() as $person) {
                $personElement = $paxmlDocument->createElement('person');
                if ($person->getEmploymentNumber()) {
                    $personElement->setAttribute('anstid', $person->getEmploymentNumber());
                }
                if ($person->getIdentityNumber()) {
                    $personElement->setAttribute('persnr', $person->getIdentityNumber());
                }
                $personElement->appendChild($paxmlDocument->createElement('fornamn', $person->getFirstName()));
                $personElement->appendChild($paxmlDocument->createElement('efternamn', $person->getLastName()));
                $personElement->appendChild($paxmlDocument->createElement('postadress', $person->getAddress1()));
                $personElement->appendChild($paxmlDocument->createElement('extraadress', $person->getAddress2()));
                $personElement->appendChild($paxmlDocument->createElement('postnr', $person->getPostalCode()));
                $personElement->appendChild($paxmlDocument->createElement('ort', $person->getCity()));
                $personElement->appendChild($paxmlDocument->createElement('mobiltelefon', $person->getMobilePhoneNumber()));
                $personElement->appendChild($paxmlDocument->createElement('hemtelefon', $person->getHomePhoneNumber()));
                $personElement->appendChild($paxmlDocument->createElement('arbetstelefon', $person->getWorkPhoneNumber()));
                $personElement->appendChild($paxmlDocument->createElement('epostarb', $person->getWorkEmail()));
                $personElement->appendChild($paxmlDocument->createElement('eposthem', $person->getHomeEmail()));
                $personElement->appendChild($paxmlDocument->createElement('bankclearing', $person->getBankClearingNumber()));
                $personElement->appendChild($paxmlDocument->createElement('bankkonto', $person->getBankAccountNumber()));
                $personElement->appendChild($paxmlDocument->createElement('personaltyp', $person->getWorkerType()));
                $personsElement->appendChild($personElement);
                if ($person->getEmploymentDate()) {
                    $personElement->appendChild($paxmlDocument->createElement('anstdatum', $person->getEmploymentDate()->format('Y-m-d')));
                }
            }
            $root->appendChild($personsElement);
        }

        $paxmlDocument->appendChild($root);

        return $paxmlDocument;
    }
}
