<?php
$signer1 = new \Globalis\Universign\Request\TransactionSigner();
$signer1
    ->setFirstname('ibouraima')
    ->setLastname('Coulibaly')
    ->setPhoneNum('00221772586131')
    ->setEmailAddress('iboucoulibaly92@gmail.com')
    ->setSuccessURL('https://www.universign.eu/fr/sign/success/')
    ->setCancelURL('https://www.universign.eu/fr/sign/cancel/')
    ->setFailURL('https://www.universign.eu/fr/sign/failed/')
    ->setProfile('etudiant');

$signer2 = new \Globalis\Universign\Request\TransactionSigner();
$signer2
    ->setFirstname('Ibouraima')
    ->setLastname('coulibaly')
    ->setPhoneNum('0221705261821')
    ->setEmailAddress('iboucoulibaly92@gmail.com')
    ->setSuccessURL('https://www.universign.eu/fr/sign/success/')
    ->setCancelURL('https://www.universign.eu/fr/sign/cancel/')
    ->setFailURL('https://www.universign.eu/fr/sign/failed/')
    ->setProfile('etudiant');

$signers = [$signer1, $signer2];



$signatureField1 = new \Globalis\Universign\Request\DocSignatureField();
$signatureField1->setPage(1)
    ->setX(100)
    ->setY(200)
    ->setSignerIndex(0)
    ->setPatternName('default')
    ->setLabel("Sur l'ensemble du template 1");

$signatureField2 = new \Globalis\Universign\Request\DocSignatureField();
$signatureField2->setPage(1)
    ->setX(350)
    ->setY(200)
    ->setSignerIndex(1)
    ->setPatternName('default')
    ->setLabel("Sur l'ensemble du template 2");

$signatureField3 = new \Globalis\Universign\Request\DocSignatureField();
$signatureField3->setPage(1)
    ->setX(100)
    ->setY(200)
    ->setSignerIndex(0)
    ->setPatternName('patternVendeur');

$signatureField4 = new \Globalis\Universign\Request\DocSignatureField();
$signatureField4->setPage(1)
    ->setX(350)
    ->setY(200)
    ->setSignerIndex(1)
    ->setPatternName('patternClient');

$signatureFieldsDoc1 = [$signatureField1, $signatureField2];
$signatureFieldsDoc2 = [$signatureField3, $signatureField4];

// Documents
$doc1 = new \Globalis\Universign\Request\TransactionDocument();
$doc1->setPath('/home/ibou/Images/1.pdf')
    ->setSignatureFields($signatureFieldsDoc1);

$doc2 = new \Globalis\Universign\Request\TransactionDocument();
$docs2->setPath('/home/ibou/Images/1.pdf')
    ->setSignatureFields($signatureFieldsDoc2);




    $request = new \Globalis\Universign\Request\TransactionRequest();
$request->addDocument($doc1)
    ->addDocument($doc2)
    ->setSigners($signers)
    ->setHandwrittenSignatureMode(
        \Globalis\Universign\Request\TransactionRequest::HANDWRITTEN_SIGNATURE_MODE_DIGITAL
    )
    ->setMustContactFirstSigner(false)
    ->setFinalDocRequesterSent(true)
    ->setChainingMode(
        \Globalis\Universign\Request\TransactionRequest::CHAINING_MODE_WEB
    )
    ->setDescription("Demonstration de la signature Universign")
    ->setProfile("profile_demo")
    ->setCertificateTypes('simple')
    ->setLanguage('fr');

// Create XmlRpc Client
$client = new \PhpXmlRpc\Client('https://url.to.universign/end_point/');

$client->setCredentials(
    'UNIVERSIGN_USER',
    'UNIVERSIGN_PASSWORD'
);

$requester = new \Globalis\Universign\Requester($client);
// Return a \Globalis\Universign\Response\TransactionResponse (with transaction url and id)
$response = $req->requestTransaction($request);

$signatureUrl = $response->url;
$transactionId = $response->id;



$response = $requester->getTransaction($transactionId);
if ($response->status === \Globalis\UniversitransactionIdgn\Response\TransactionInfo::STATUS_COMPLETED) {
    $docs = $requester->getDocuments($transactionId);
    foreach ($docs as $doc) {
        // Doc content
        $doc->content;
        // Doc file_name
        $doc->name;
    }
}