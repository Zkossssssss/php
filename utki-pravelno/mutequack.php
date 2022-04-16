
<?php
require_once 'quackbehaviour.php';
class MuteQuack implements QuackBehavior {
    public function quack() {
        echo 'Молчеливая утка<br>';
    }
}
?>