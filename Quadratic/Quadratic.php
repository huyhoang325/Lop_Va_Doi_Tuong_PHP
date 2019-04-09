<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="">
</head>
<body>
<form method="post">
    <h3>Giải phương trình bậc 2 ax <sup>2</sup>+ bx + c = 0</h3>
    Nhập các hệ số:
    a = <input type="text" name="a" size="5">
    b = <input type="text" name="b" size="5">
    c = <input type="text" name="c" size="5">
    <input type="submit" name="result" value="Giải phương trình">
</form><br><br>
<?php
class Quadratic {
    private $a;
    private $b;
    private $c;

    public function setabc($a,$b,$c){
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function delta(){
        return pow($this -> b,2) - 4 * $this -> a * $this -> c;
    }

    public function result(){
        if($this->delta()<0)
            echo "Phương trình vô nghiệm";
        else if ($this->delta() ==0)
            echo "Phương trình có nghiệm kép: x<sub>1</sub> = x<sub>2</sub> = ".-$this->b/(2*$this->a);
        else{
            $x1 = (-$this->b-sqrt($this->delta()))/(2*$this->a);
            $x2 = (-$this->b+sqrt($this->delta()))/(2*$this->a);
            echo "Phương trình có 2 nghiệm phân biệt: &emsp;";
            echo "x<sub>1</sub> = $x1 &emsp;x<sub>2</sub> = $x2";
        }
    }
}

$result = new Quadratic();
if(isset($_POST['result'])){
    $result->setabc($_POST['a'],$_POST['b'],$_POST['c']);
    $result->result();
}
?>
</body>
</html>