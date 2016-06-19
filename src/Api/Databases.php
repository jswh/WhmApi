<?php
namespace WhmApi\Api;
use WhmApi\Core\ApiBase;
class Databases extends ApiBase {
     /**
     * @return string
     */
    public function list_database_users()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @return string
     */
    public function list_databases()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @param string $oldname
     * @param string $newname
     * @param array $params //[cpuser]
     * @return string
     */
    public function rename_mysql_database($oldname, $newname, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('oldname', 'newname') + $params);
    }

    /**
     * @param  string  $oldname
     * @param string $newname
     * @param array $params //[cpuser]
     * @return string
     */
    public function rename_mysql_user($oldname, $newname, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('oldname', 'newname') + $params);
    }

    /**
     * @param string $oldname
     * @param string $newname
     * @param array $params //[cpuser]
     * @return string
     */
    public function rename_postgresql_database($oldname, $newname, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('oldname', 'newname') + $params);
    }

    /**
     * @param string $oldname
     * @param string $newname
     * @param string $password
     * @param array $params //[cpuser]
     * @return string
     */
    public function rename_postgresql_user($oldname, $newname, $password, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('oldname', 'newname', 'password') + $params);
    }

    /**
     * @param string $user
     * @param string $password
     * @param array $params //[cpuser]
     * @return string
     */
    public function set_mysql_password($user, $password, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('user', 'password') + $params);
    }

    /**
     * @param string $user
     * @param string $password
     * @param array $params //[cpuser]
     * @return string
     */
    public function set_postgresql_password($user, $password, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('user', 'password') + $params);
    }


}