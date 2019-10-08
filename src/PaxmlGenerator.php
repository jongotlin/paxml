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

        $paxmlDocument->appendChild($root);

        return $paxmlDocument;
    }
}
