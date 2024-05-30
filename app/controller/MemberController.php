<?php
include_once 'app\model\members.php';

class MemberController {
    private $memberModel;

    public function __construct() {
        $this->memberModel = new Member();
    }

    public function index() {
        $result = $this->memberModel->read();
        $num = $result->rowCount();

        if ($num > 0) {
            $members_arr = array();

            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                extract($row);
                $member_item = array(
                    'id' => $id,
                    'nom' => $nom,
                    'description' => $description,
                    'image_default' => $image_default,
                    'image_hover' => $image_hover
                );

                array_push($members_arr, $member_item);
            }
            return $members_arr;
        } else {
            return array();
        }
    }
}
