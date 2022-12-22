
<?php 
    class crud{
        // private database object
        private $db;
        // constructor to initialize private variable to the database connection
        function __construct($db_con){
            $this->db = $db_con;
        }  
        // function to insert a new record into the attendee database
        public function insertAppointments($firstname, $lastname, $email, $servicename, $clientaddress, $appointmentdate, $gender, $avatar_path){
            try{
                // define sql statement to be executed
                $sql = "INSERT INTO appointment (firstname,lastname,email,servicename,clientaddress,appointmentdate,gender_id,avatar_path)
                VALUES (:firstname, :lastname, :email, :servicename, :clientaddress, :appointmentdate,  :gender, :avatar_path)";
                // prepare the sql statement for execution
                $stmt = $this->db->prepare($sql);
                // bind all placeholders to the actual values
                $stmt->bindparam(':firstname', $firstname);
                $stmt->bindparam(':lastname', $lastname);
                $stmt->bindparam(':email', $email);
                $stmt->bindparam(':servicename', $servicename);
                $stmt->bindparam(':clientaddress', $clientaddress);
                $stmt->bindparam(':appointmentdate', $appointmentdate);                              
                $stmt->bindparam(':gender', $gender);
                $stmt->bindparam(':avatar_path',$avatar_path);
                // execute statement
                $stmt->execute();
                return true;
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }
        public function editAppointments($firstname, $lastname, $email, $servicename, $clientaddress, $appointmentdate, $gender, $avatar_path){
            try{
                $sql = "UPDATE `appointments` SET `firstname`=:firstname,`lastname`=:lastname,`email`=:email,`servicename`=:servicename,
                `clientaddress`=:clientaddress,`appointmentdate`=:appointmentdate,`gender_id`=:gender WHERE 
                appointment_id =:id";
                $stmt = $this->db->prepare($sql);
                // bind all placeholders to the actual values
                $stmt->bindparam(':firstname', $firstname);
                $stmt->bindparam(':lastname', $lastname);
                $stmt->bindparam(':email', $email);
                $stmt->bindparam(':servicename', $servicename);
                $stmt->bindparam(':clientaddress', $clientaddress);
                $stmt->bindparam(':appointmentdate', $appointmentdate);                              
                $stmt->bindparam(':gender', $gender);
                $stmt->bindparam(':avatar_path',$avatar_path);
                // execute statement
                $stmt->execute();
                return true;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }
        public function getAppointments(){
            try{
                $sql = "SELECT * FROM `appointments` a inner join gender s on a.gender_id = s.gender_id";
                $result = $this->db->query($sql);
                return $result;
                }catch (PDOException $e) {
                    echo $e->getMessage();
                    return false;
            }
                     
        }
        public function getAppointmentsDetails($id){
            try{
                $sql = "select * from appointments a inner join gender s on a.gender_id = s.gender_id 
                where appointment_id = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id', $id);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }           
        }
        public function deleteAppointments($id){
            try{
                $sql = "delete from appointments where appointment_id =:id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id', $id);
                $stmt->execute();
                return true;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }
        public function getGender(){
            try{
                $sql = "SELECT * FROM `gender`";
                $result = $this->db->query($sql);
                return $result;
            }catch (PDOException $e){
                echo $e->getMessage();
                return false;
            }

        }
        public function getGenderById($id){
            try{
                $sql = "SELECT * FROM `gender` where gender_id = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id', $id);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }
    }
?>
