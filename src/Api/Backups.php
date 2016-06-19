<?php
namespace WhmApi\Api;
use WhmApi\Core\ApiBase;
class Backups extends ApiBase {
     /**
     * @return string
     */
    public function backup_config_get()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @param array $params //[backup_daily_enable, postbackup, backupenable, backup_monthly_enable, usebinarypkgacct, backuptype, backup_daily_retention, backupdays, backup_monthly_dates, backupfiles, backupaccts, prebackup, psqlbackup, keeplocal, localzonesonly, backupbwdata, dieifnotmounted, backuplogs, linkdest, backupsuspendedaccounts, gziprsyncopts, backupdir, errorthreshhold, backupmount, mysqlbackup, backup_monthly_retention]
     * @return string
     */
    public function backup_config_set(array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact() + $params);
    }

    /**
     * @return string
     */
    public function backup_date_list()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @param string $name
     * @param string $type
     * @param Boolean  $disabled
     * @param array $params //[upload_system_backup]
     * @return string
     */
    public function backup_destination_add($name, $type, $disabled, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('name', 'type', 'disabled') + $params);
    }

    /**
     * @param string $id
     * @return string
     */
    public function backup_destination_delete($id)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('id'));
    }

    /**
     * @param string $id
     * @return string
     */
    public function backup_destination_get($id)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('id'));
    }

    /**
     * @return string
     */
    public function backup_destination_list()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @param string $id
     * @param string $name
     * @param string $type
     * @param Boolean  $disabled
     * @param array $params //[disable_reason, upload_system_backup]
     * @return string
     */
    public function backup_destination_set($id, $name, $type, $disabled, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('id', 'name', 'type', 'disabled') + $params);
    }

    /**
     * @param string $id
     * @param Boolean  $disableonfail
     * @return string
     */
    public function backup_destination_validate($id, $disableonfail)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('id', 'disableonfail'));
    }

    /**
     * @return string
     */
    public function backup_set_list()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @param boolean $state
     * @param string $backupversion
     * @return string
     */
    public function backup_skip_users_all($state, $backupversion)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('state', 'backupversion'));
    }

    /**
     * @param array $params //[reason, perc, msg, running]
     * @return string
     */
    public function backup_skip_users_all_status(array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact() + $params);
    }

    /**
     * @param string $restore_point
     * @return string
     */
    public function backup_user_list($restore_point)
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('restore_point'));
    }

    /**
     * @return string
     */
    public function list_cparchive_files()
    {
        return $this->processor->process(strtolower(__FUNCTION__));
    }

    /**
     * @param string $user
     * @param array $params //[legacy]
     * @return string
     */
    public function toggle_user_backup_state($user, array $params = [])
    {
        return $this->processor->process(strtolower(__FUNCTION__), compact('user') + $params);
    }


}