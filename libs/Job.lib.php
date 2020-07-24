<?php class Job{
    private $db;                                // Database Connection Variable.

    public function __construct(){              // Constructor
        $this->db = new Database;               // Database Connection Object.
    }

    public function getAllJobs(){               // Get All Jobs
        $this->db->query('
            SELECT
                `jobs`.*, `categories`.`name`
            AS
                `cate_name`
            FROM
                `jobs`
            INNER JOIN
                `categories`
            ON
                `jobs`.`cate_id` = `categories`.`id`
            ORDER BY
                `post_date`
            DESC
        ');                                     // Select Statement.

        $results = $this->db->resultSet();      // Assign Result Set.

        return $results;
    }

    public function getAllCates(){               // Get All Categories
        $this->db->query('
            SELECT
                *
            FROM
                `categories`
        ');                                     // Select Statement.

        $results = $this->db->resultSet();      // Assign Result Set.

        return $results;
    }

    public function getJobByCate($cateID){      // Get Job By Category ID.
        $this->db->query('
            SELECT
                `jobs`.*
            FROM
                `jobs`
            WHERE
                `jobs`.`cate_id` = ' .$cateID. '
        ');                                     // Select Statement.

        $results = $this->db->resultSet();      // Assign Result Set.

        return $results;
    }

    public function getCate($cateID){           // Get Category By Category ID.
        $this->db->query('
            SELECT
                `categories`.*
            FROM
                `categories`
            WHERE
                `categories`.`id` = :cate_id    
        ');                                     // Select Statement.

        $this->db->bind(':cate_id', $cateID);   // Bind Variable.
        $row = $this->db->singleResult();       // Assign Result.

        return $row;
    }

    public function getJob($jobID){             // Get Job By Job ID.
        $this->db->query('
            SELECT
                `jobs`.*
            FROM
                `jobs`
            WHERE
                `jobs`.`id` = :job_id
        ');                                     // Select Statement.

        $this->db->bind(':job_id', $jobID);     // Bind Variable.
        $row = $this->db->singleResult();       // Assign Result.

        return $row;
    }

    public function submit($data){              // Submit Input Data.
        // Insert Query Statement.
        $this->db->query('
            INSERT INTO
                `jobs`
                    (
                        `company`,
                        `cate_id`,
                        `title`,
                        `description`,
                        `salary`,
                        `location`,
                        `contact_user`,
                        `contact_email`
                    )
            VALUES
                (
                    :comp,
                    :cate,
                    :titl,
                    :desc,
                    :sala,
                    :loca,
                    :name,
                    :mail
                )
        ');
        // Bind Query Data.
        $this->db->bind(
            ':comp',
            $data['comp']
        );
        $this->db->bind(
            ':cate',
            $data['cate']
        );
        $this->db->bind(
            ':titl',
            $data['titl']
        );
        $this->db->bind(
            ':desc',
            $data['desc']
        );
        $this->db->bind(
            ':sala',
            $data['sala']
        );
        $this->db->bind(
            ':loca',
            $data['loca']
        );
        $this->db->bind(
            ':name',
            $data['name']
        );
        $this->db->bind(
            ':mail',
            $data['mail']
        );
        // Execute Query Data.
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }   
    }
    public function delete($id){        // Delete Job With ID.
        $this->db->query('
            DELETE FROM
                `jobs`
            WHERE
                `id` = :job_id
        ');
        $this->db->bind(
            ':job_id',
            $id
        );
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function update($id, $data){              // Update Input Data.
        // Insert Query Statement.
        $this->db->query('
            UPDATE
                `jobs`
            SET
                `company`       = :comp,
                `cate_id`       = :cate,
                `title`         = :titl,
                `description`   = :desc,
                `salary`        = :sala,
                `location`      = :loca,
                `contact_user`  = :name,
                `contact_email` = :mail
            WHERE
                `id` = ' .$id. '
        ');
        // Bind Query Data.
        $this->db->bind(
            ':comp',
            $data['comp']
        );
        $this->db->bind(
            ':cate',
            $data['cate']
        );
        $this->db->bind(
            ':titl',
            $data['titl']
        );
        $this->db->bind(
            ':desc',
            $data['desc']
        );
        $this->db->bind(
            ':sala',
            $data['sala']
        );
        $this->db->bind(
            ':loca',
            $data['loca']
        );
        $this->db->bind(
            ':name',
            $data['name']
        );
        $this->db->bind(
            ':mail',
            $data['mail']
        );
        // Execute Query Data.
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }   
    }
}
