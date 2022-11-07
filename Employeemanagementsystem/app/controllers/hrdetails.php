<?php

Class HRdetails extends Controller
{
    public function index()
    {
        $this->loadModel("HRdata");
        $this->loadModel("employeeDetails");
        $this->view("HR/employeedetails");
    }
    
    public function pageNo()
    {
        $display=new EmployeeDetails();
        $sql=$display->page();
        $row=mysqli_fetch_array($sql);
        $total_records=$row[0];
        $page_per_record=4;
        $total_pages=ceil($total_records/$page_per_record);
        $_SESSION['totalpage']=$total_pages;
        $pageLink="";
        $page=$_SESSION['pages']; 
        echo $page;
        if($page>1)
        {
            echo "<a href='hrdetails?page=".($page-1)."'>Prev</a>";
        }
        for($i=1;$i<=$total_pages;$i++)
        {
            if($i==$page)
            {
                $pageLink = "<a class = 'active' href = 'hrdetails?page=".$i."'>".$i."</a>";
            }
            else{
                $pageLink = "<a href = 'hrdetails?page=".$i."'>".$i."</a>";
            }
        }
        echo $pageLink;
        if($page<$total_pages){    
            echo "<a href = 'hrdetails?page=".($page + 1)."'>Next</a>";
        }

    }
}