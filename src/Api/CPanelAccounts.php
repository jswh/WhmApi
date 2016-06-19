<?php
namespace WhmApi\Api;
use WhmApi\Core\ApiBase;
class CPanelAccounts extends ApiBase {
     /**
     * @param array $params //[user, domain]
     * @return string
     */
    public function accountsummary(array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact() + $params);
    }

    /**
     * @param string $username
     * @param string $domain
     * @param string $password
     * @param array $params //[plan, pkgname, savepkg, featurelist, quota, ip, cgi, frontpage, hasshell, contactemail, cpmod, maxftp, maxsql, maxpop, maxlst, maxsub, maxpark, maxaddon, bwlimit, customip, language, useregns, hasuseregns, reseller, forcedns, mxcheck, MAX_EMAIL_PER_HOUR, MAX_DEFER_FAIL_PERCENTAGE, uid, gid, homedir, dkim, spf, owner]
     * @return string
     */
    public function createacct($username, $domain, $password, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('username', 'domain', 'password') + $params);
    }

    /**
     * @param string $domain
     * @return string
     */
    public function domainuserdata($domain)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('domain'));
    }

    /**
     * @param string $user
     * @param string $quota
     * @return string
     */
    public function editquota($user, $quota)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('user', 'quota'));
    }

    /**
     * @param string $users_json
     * @param array $params //[stop_on_failure]
     * @return string
     */
    public function forcepasswordchange($users_json, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('users_json') + $params);
    }

    /**
     * @param string $user
     * @return string
     */
    public function has_digest_auth($user)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('user'));
    }

    /**
     * @param string $user
     * @return string
     */
    public function has_mycnf_for_cpuser($user)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('user'));
    }

    /**
     * @param string $user
     * @param array $params //[bwlimit]
     * @return string
     */
    public function limitbw($user, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('user') + $params);
    }

    /**
     * @param array $params //[searchtype, search, searchmethod, want]
     * @return string
     */
    public function listaccts(array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), $params);
    }

    /**
     * @return string
     */
    public function listlockedaccounts()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @return string
     */
    public function listsuspended()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @param string $user
     * @param array $params //[BACKUPS, BWLIMIT, contactemail, DNS, HASCGI, HASDKIM, HASSHELL, HASSPF, LOCALE, MAXADDON, MAXFTP, MAXLST, MAXPARK, MAXPOP, MAXSQL, MAXSUB, MAX_EMAIL_PER_HOUR, MAX_DEFER_FAIL_PERCENTAGE, newuser, owner, QUOTA, remove_missing_extensions, rename_database_objects, frontpage, RS]
     * @return string
     */
    public function modifyacct($user, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('user') + $params);
    }

    /**
     * @param string $user
     * @param string $password
     * @param array $params //[enabledigest, db_pass_update]
     * @return string
     */
    public function passwd($user, $password, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('user', 'password') + $params);
    }

    /**
     * @param string $user
     * @param array $params //[keepdns]
     * @return string
     */
    public function removeacct($user, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('user') + $params);
    }

    /**
     * @param string $user
     * @param string $password
     * @param boolean $enabledigest
     * @return string
     */
    public function set_digest_auth($user, $password, $enabledigest)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('user', 'password', 'enabledigest'));
    }

    /**
     * @param array $params //[month, year, showres, search, searchtype]
     * @return string
     */
    public function showbw(array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact() + $params);
    }

    /**
     * @param string $user
     * @param array $params //[reason, disallowun]
     * @return string
     */
    public function suspendacct($user, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('user') + $params);
    }

    /**
     * @param string $user
     * @return string
     */
    public function unsuspendacct($user)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('user'));
    }


}