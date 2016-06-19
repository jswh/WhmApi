<?php
namespace WhmApi;
use WhmApi\Api\AddonDomains;
use WhmApi\Api\Backups;
use WhmApi\Api\ConfigurationClusters;
use WhmApi\Api\CPanelAccounts;
use WhmApi\Api\CPHulk;
use WhmApi\Api\Databases;
use WhmApi\Api\DNS;
use WhmApi\Api\Exim;
use WhmApi\Api\ExternalAuthentication;
use WhmApi\Api\FeatureLists;
use WhmApi\Api\GeneralAPI;
use WhmApi\Api\Greylisting;
use WhmApi\Api\Integration;
use WhmApi\Api\IPAddresses;
use WhmApi\Api\Mail;
use WhmApi\Api\MailSNI;
use WhmApi\Api\Market;
use WhmApi\Api\ModSecuritytrade;
use WhmApi\Api\Packages;
use WhmApi\Api\PHP;
use WhmApi\Api\RemoteMySQLreg;
use WhmApi\Api\Resellers;
use WhmApi\Api\RestoreFunctions;
use WhmApi\Api\RPMs;
use WhmApi\Api\ScriptHooks;
use WhmApi\Api\ServerAdministration;
use WhmApi\Api\ServerInformation;
use WhmApi\Api\Services;
use WhmApi\Api\SSH;
use WhmApi\Api\SSL;
use WhmApi\Api\StylesandThemes;
use WhmApi\Api\SupportTickets;
use WhmApi\Api\Transfers;
use WhmApi\Api\Two_FactorAuthentication;
use WhmApi\Api\Updates;
use WhmApi\Api\WHMAccounts;
use WhmApi\Core\Processor;
use WhmApi\Core\ApiGenerator;
class Whm
{
    private $processor;
    public function __construct($domain, $user, $accessToken, $isHttps)
    {
        $this->processor = new Processor($domain, $user, $accessToken, $isHttps);

        $this->AddonDomians = new AddonDomains($this->processor);
        $this->Backups = new Backups($this->processor);
        $this->ConfigurationClusters = new ConfigurationClusters($this->processor);
        $this->CPanelAccounts = new CPanelAccounts($this->processor);
        $this->CPHulk = new CPHulk($this->processor);
        $this->Databases = new Databases($this->processor);
        $this->DNS = new DNS($this->processor);
        $this->Exim = new Exim($this->processor);
        $this->ExternalAuthentication = new ExternalAuthentication($this->processor);
        $this->FeatureLists = new FeatureLists($this->processor);
        $this->GeneralAPI = new GeneralAPI($this->processor);
        $this->Greylisting = new Greylisting($this->processor);
        $this->Integration = new Integration($this->processor);
        $this->IPAddresses = new IPAddresses($this->processor);
        $this->Mail = new Mail($this->processor);
        $this->MailSNI = new MailSNI($this->processor);
        $this->Market = new Market($this->processor);
        $this->ModSecuritytrade = new ModSecuritytrade($this->processor);
        $this->Packages = new Packages($this->processor);
        $this->PHP = new PHP($this->processor);
        $this->RemoteMySQLreg = new RemoteMySQLreg($this->processor);
        $this->Resellers = new Resellers($this->processor);
        $this->RestoreFunctions = new RestoreFunctions($this->processor);
        $this->RPMs = new RPMs($this->processor);
        $this->ScriptHooks = new ScriptHooks($this->processor);
        $this->ServerAdministration = new ServerAdministration($this->processor);
        $this->ServerInformation = new ServerInformation($this->processor);
        $this->Services = new Services($this->processor);
        $this->SSH = new SSH($this->processor);
        $this->SSL = new SSL($this->processor);
        $this->StylesandThemes = new StylesandThemes($this->processor);
        $this->SupportTickets = new SupportTickets($this->processor);
        $this->Transfers = new Transfers($this->processor);
        $this->Two_FactorAuthentication = new Two_FactorAuthentication($this->processor);
        $this->Updates = new Updates($this->processor);
        $this->WHMAccounts = new WHMAccounts($this->processor);
    }
}

