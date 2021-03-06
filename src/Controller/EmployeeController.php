<?php
// src/Controller/ProductController.php
namespace App\Controller;

use App\Entity\Employee;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EmployeeController extends AbstractController
{
    /**
     * @Route("/employee", name="create_product")
     */
    public function addEmployee(): Response
    {
        // you can fetch the EntityManager via $this->getDoctrine()
        // or you can add an argument to the action: createProduct(EntityManagerInterface $entityManager)
        $entityManager = $this->getDoctrine()->getManager();

        $employee = new Employee();
        $employee->setFirstName('Linh');
        $employee->setLastName('Nguyen');
        $employee->setEmpID(1);

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($employee);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Saved new employee with id '.$employee->getId());
    }
    public function showAll() {
        // Tells Doctorine to find 
        $employees = $this->getDoctrine()
            -> getRepository(Employee::class)->findAll();
        
        if (!$employees) {
                throw $this->createNotFoundException("No Employee found.");
        }
        $response = "";
        foreach($employees as &$employee) {
            $line = "<tr>"
                    ."<td>".$employee->getFirstName()."</td>"
                    ."<td>".$employee->getLastName()."</td>"
                    ."<td>".$employee->getStartDate()."</td>"
                    ."<td>".$employee->getEndDate()."</td>"
                    ."</tr>";
        }

            // Subject to change depending on however we need to return it
        return new Response($response);
    }

}