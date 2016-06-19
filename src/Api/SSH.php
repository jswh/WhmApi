<?php
namespace WhmApi\Api;
use WhmApi\Core\ApiBase;
class SSH extends ApiBase {
     /**
     * @param array $params //[file, text, user, authorize, options]
     * @return string
     */
    public function authorizesshkey(array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact() + $params);
    }

    /**
     * @param string $host
     * @param array $params //[port]
     * @return string
     */
    public function check_remote_ssh_connection($host, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('host') + $params);
    }

    /**
     * @param string $user
     * @param  string  $file
     * @param array $params //[passphrase, keep_file]
     * @return string
     */
    public function convertopensshtoputty($user, $file, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('user', 'file') + $params);
    }

    /**
     * @param string $file
     * @param array $params //[user, leave_authorized]
     * @return string
     */
    public function deletesshkey($file, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('file') + $params);
    }

    /**
     * @param array $params //[user, passphrase, name, bits, algorithm, abort_on_existing_key, comment]
     * @return string
     */
    public function generatesshkeypair(array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact() + $params);
    }

    /**
     * @param string $user
     * @param  string  $name
     * @param string $key
     * @param array $params //[extract_public, extract_private, passphrase]
     * @return string
     */
    public function importsshkey($user, $name, $key, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('user', 'name', 'key') + $params);
    }

    /**
     * @param array $params //[user, files, public, private, public_texts, private_text, extract_private]
     * @return string
     */
    public function listsshkeys(array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact() + $params);
    }


}