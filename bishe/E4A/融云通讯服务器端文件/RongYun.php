<?php
    include('ServerAPI.php');
	$receive = $_POST["data"];
	if(strlen($receive )>5){
        $p = new ServerAPI('bmdehs6pdvuws','HlKsbWRsU5qJ'); //���ڴ˴���Ϊ���Լ���APP_KEY��APP_SECRET
	}else{
        exit('Error');
	}
	if(substr($receive,0,8) == 'getToken'){ //��ȡ����
		$mainbody = substr($receive,8);
		$mainbody = explode("|*|",$mainbody);
		if(count($mainbody)<3){
	        exit('Error');
        }           
        if($mainbody[0]=="-1"){
            $userid = time();
        }else{
            $userid = $mainbody[0];
        }
        $r = $p->getToken($userid ,$mainbody[1],$mainbody[2]); 
        print_r($r);
    }else if(substr($receive,0,11) == 'groupCreate'){ //����Ⱥ��
		$mainbody = substr($receive,11);
		$mainbody = explode("|*|",$mainbody);
		if(count($mainbody)<3){
	        exit('Error');
        } 
        $r = $p->groupCreate($mainbody[0],$mainbody[1],$mainbody[2]); 
        print_r($r);                
    }else if(substr($receive,0,9) == 'userBlock'){ //����û�
		$mainbody = substr($receive,9);
		$mainbody = explode("|*|",$mainbody);
		if(count($mainbody)<2){
	        exit('Error');
        } 
        $r = $p->userBlock($mainbody[0],$mainbody[1]); 
        print_r($r);    
    }else if(substr($receive,0,11) == 'userUnBlock'){ //����û�
		$mainbody = substr($receive,11);
		if($mainbody==''){
	        exit('Error');
        } 
        $r = $p->userUnBlock($mainbody); 
        print_r($r);       
    }else if(substr($receive,0,20) == 'messageSystemPublish'){ //����ϵͳ��Ϣ
		$mainbody = substr($receive,20);
		$mainbody = explode("|*|",$mainbody);
		if(count($mainbody)<4){
	        exit('Error');
        } 
        $r = $p->messageSystemPublish($mainbody[0],array('userId'=>$mainbody[1]),'RC:TxtMsg','{"content":"'.$mainbody[2].'","extra":"'.$mainbody[3].'"}','',''); 
        print_r($r);         
    }
?>
