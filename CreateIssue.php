<?php
    /**
     * Enter your own path in this ..
     */
    require("/Users/ac2013/Desktop/AbhinavStuff/phpfolder/GitPost/rest_curl_client.php");
    //include 'rest_curl_client.php';
    
    //calling RestApi
    $Callobj = new RestCurlClient();
	//class CreateIssue.
class CreateIssue
    {
        
        
        /**
         * Perform a POST call to server
         *
         * Additionaly in $response_object and $response_info are the
         * response from server and the response info as it is returned
         * by curl_exec() and curl_getinfo() respectively.
         *
         */

   public function Checkparm($UserData)
        {
            
               if(isset($UserData[0],$UserData[1],$UserData[2],$UserData[3],$UserData[4]))
                    {
                        //init param
                            $UserLogin =  substr($UserData[0],2);
                            $Password =   substr($UserData[1],2);
                            $Repository = substr($UserData[2],2);
                            $Post_Data = array(
                            "title" =>  substr($UserData[3],2),
                            "body" => substr($UserData[4],2),
                            "assignee" => $UserLogin,
                            "milestone" => 1,
                            "labels" => array("Label1","Label2"));
                        
                        //Calling Web Service.
                        $Output = $Callobj->post(
                                        $Repository,
                                        json_encode($Post_Data),
                                                 array(
                                                       CURLOPT_HTTPAUTH => CURLAUTH_BASIC,
                                                       CURLOPT_USERPWD => $UserLogin.":"$Password));
                        print_r($Output);
        
                    }
                else
                    {
                        
                            echo "Please Enter Correct parameters Example - $ CreateIssue -ujdoe -ppassword -shttps://github.com/example/test -tThe title of my issue -bHere what I did to reproduce the problem \n";
        
                            exit;
                    }
        }
    }
    
    $MainObj = new CreateIssue();
    //Taking Param of User.
    $Param = array($argv[1],$argv[2],$argv[3],$argv[4],$argv[5]);
    //init parameter for Class.
    $MainObj->Checkparm($Param);
?>
