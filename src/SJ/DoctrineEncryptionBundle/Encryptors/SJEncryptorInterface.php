<?php

namespace SJ\DoctrineEncryptionBundle\Encryptors;

interface SJEncryptorInterface
{

    /**
     * SJEncryptorInterface constructor.
     *
     * @param $secretKey string The secret key used for encryption
     */
    public function __construct($secretKey);

    /**
     * Encrypt the data
     *
     * @param $plainText string The plain data to encrypt
     * @return string The encryption result
     */
    public function encryptData($plainText);

    /**
     * Decrypt the data
     *
     * @param $encryptedData string The data encrypted
     * @return string The data decrypted
     */
    public function decryptData($encryptedData);
}