<?php
namespace WhmApi\Api;
use WhmApi\Core\ApiBase;
class Packages extends ApiBase {
     /**
     * @param string $pkg
     * @return string
     */
    public function _getpkgextensionform($pkg)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('pkg'));
    }

    /**
     * @param string $name
     * @param array $params //[featurelist, quota, ip, cgi, frontpage, cpmod, language, maxftp, maxsql, maxpop, maxlists, maxsub, maxpark, maxaddon, hasshell, bwlimit, MAX_EMAIL_PER_HOUR, MAX_DEFER_FAIL_PERCENTAGE, digestauth, _PACKAGE_EXTENSIONS]
     * @return string
     */
    public function addpkg($name, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('name') + $params);
    }

    /**
     * @param string $user
     * @param string $pkg
     * @return string
     */
    public function changepackage($user, $pkg)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('user', 'pkg'));
    }

    /**
     * @param string $name
     * @param array $params //[featurelist, quota, ip, cgi, frontpage, cpmod, language, maxftp, maxsql, maxpop, maxlists, maxsub, maxpark, maxaddon, hasshell, bwlimit, MAX_EMAIL_PER_HOUR, MAX_DEFER_FAIL_PERCENTAGE, digestauth, _PACKAGE_EXTENSIONS]
     * @return string
     */
    public function editpkg($name, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('name') + $params);
    }

    /**
     * @param string $pkg
     * @return string
     */
    public function getpkginfo($pkg)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('pkg'));
    }

    /**
     * @param string $pkgname
     * @return string
     */
    public function killpkg($pkgname)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('pkgname'));
    }

    /**
     * @return string
     */
    public function listpkgs()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @param array $params //[MAXSUB, MAXADDON, MAX_DEFER_FAIL_PERCENTAGE, _PACKAGE_EXTENSIONS, CPMOD, MAX_EMAIL_PER_HOUR, LANG, MAXLST, MAXPARK, MAXSQL, FEATURELIST, CGI, MAXFTP, BWLIMIT, QUOTA, DIGESTAUTH, IP]
     * @return string
     */
    public function matchpkgs(array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact() + $params);
    }


}