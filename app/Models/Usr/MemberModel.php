<?php namespace App\Models\Usr;

use CodeIgniter\Model;
use Throwable;
use stdClass;
use App\Models\SecurityModel;

class MemberModel extends Model
{
    // 사용자 정보 입력
    public function updateMemberInfo($data)
    {
        $security_model = new SecurityModel();

        $user_idx = $data["user_idx"];
        $user_name = $data["user_name"];
        $admin_yn = $data["admin_yn"];
        $profile_image = $data["profile_image"];
        $use_yn = $data["use_yn"];
        $upd_id = $data["upd_id"];

        $user_name_enc = $security_model->getTextEncrypt($user_name); // 이름 암호화

        $today = date("YmdHIs");

        $db_result = true;
        $db_message = "입력이 잘 되었습니다";
        $affected_rows = 0;

        try {
            $db = db_connect();
            $db->transStart();
            $builder = $db->table("gwt_user");
            $builder->set("user_name", $user_name_enc);
            $builder->set("admin_yn", $admin_yn);
            $builder->set("use_yn", $use_yn);
            $builder->set("profile_image", $profile_image);
            $builder->set("upd_id", $upd_id);
            $builder->set("upd_date", $today);
            $builder->where("user_idx", $user_idx);
            $db_result = $builder->update();
            $db->transComplete();
            $affected_rows = $db->affectedRows();
        } catch (Throwable $t) {
            $db_result = false;
            $db_message = "입력에 오류가 발생했습니다.";
        }

        $model_result = array();
        $model_result["result"] = $db_result;
        $model_result["message"] = $db_message;
        $model_result["affected_rows"] = $affected_rows;

        return $model_result;
    }


}
