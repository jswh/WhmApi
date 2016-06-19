<?php
namespace WhmApi\Api;
use WhmApi\Core\ApiBase;
class Resellers extends ApiBase {
     /**
     * @param array $params //[user]
     * @return string
     */
    public function acctcounts(array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact() + $params);
    }

    /**
     * @param array $params //[user]
     * @return string
     */
    public function getresellerips(array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact() + $params);
    }

    /**
     * @return string
     */
    public function listacls()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @return string
     */
    public function listresellers()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @param string $user
     * @return string
     */
    public function resellerstats($user)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('user'));
    }

    /**
     * @param string $acllist
     * @param array $params //[acl-edit-pkg, acl-, acl-, acl-, acl-, acl-, acl-, acl-, acl-, acl-, acl-, acl-, acl-, acl-, acl-, acl-, acl-, acl-, acl-, acl-, acl-, acl-, acl-, acl-, acl-, acl-, acl-, acl-, acl-, acl-, acl-, acl-, acl-, acl-, acl-, acl-, acl-, acl-, acl-, acl-, acl-, acl-]
     * @return string
     */
    public function saveacllist($acllist, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('acllist') + $params);
    }

    /**
     * @param string $reseller
     * @param array $params //[acllist, acl-edit-pkg, acl-add-pkg, acl-mailcheck, acl-show-bandwidth, acl-list-accts, acl-clustering, acl-news, acl-thirdparty, acl-kill-dns, acl-edit-dns, acl-park-dns, acl-create-dns, acl-ssl, acl-create-acct, acl-suspend-acct, acl-res-cart, acl-passwd, acl-ssl-buy, acl-frontpage, acl-upgrade-account, acl-ssl-gencrt, acl-edit-mx, acl-kill-acct, acl-viewglobalpackages, acl-disallow-shell, acl-add-pkg-shell, acl-allow-addoncreate, acl-allow-parkedcreate, acl-allow-unlimited-disk-pkgs, acl-allow-unlimited-pkgs, acl-allow-unlimited-bw-pkgs, acl-add-pkg-ip, acl-resftp, acl-restart, acl-status, acl-stats, acl-quota, acl-demo-setup, acl-edit-account, acl-limit-bandwidth, acl-rearrange-accts, acl-all]
     * @return string
     */
    public function setacls($reseller, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('reseller') + $params);
    }

    /**
     * @param string $user
     * @param array $params //[ips, delegate]
     * @return string
     */
    public function setresellerips($user, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('user') + $params);
    }

    /**
     * @param string $user
     * @param array $params //[enable_account_limit, account_limit, enable_resource_limits, bandwidth_limit, enable_overselling, enable_overselling_bandwidth, enable_overselling_diskspace, diskspace_limit, enable_package_limits, enable_package_limit_numbers]
     * @return string
     */
    public function setresellerlimits($user, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('user') + $params);
    }

    /**
     * @param string $user
     * @param string $ip
     * @return string
     */
    public function setresellermainip($user, $ip)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('user', 'ip'));
    }

    /**
     * @param string $user
     * @param array $params //[nameservers]
     * @return string
     */
    public function setresellernameservers($user, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('user') + $params);
    }

    /**
     * @param string $user
     * @param array $params //[no_limit, package, allowed, number]
     * @return string
     */
    public function setresellerpackagelimit($user, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('user') + $params);
    }

    /**
     * @param string $user
     * @param array $params //[makeowner]
     * @return string
     */
    public function setupreseller($user, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('user') + $params);
    }

    /**
     * @param string $user
     * @param array $params //[reason]
     * @return string
     */
    public function suspendreseller($user, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('user') + $params);
    }

    /**
     * @param string $user
     * @param boolean $terminatereseller
     * @return string
     */
    public function terminatereseller($user, $terminatereseller)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('user', 'terminatereseller'));
    }

    /**
     * @param string $user
     * @return string
     */
    public function unsetupreseller($user)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('user'));
    }

    /**
     * @param string $user
     * @return string
     */
    public function unsuspendreseller($user)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('user'));
    }


}