<?php 

namespace Mohammadmohsinlaeeque\Kareo;

/**
*  Kareo Library
*
*  Use this section to define what this class is doing, the PHPDocumentator will use this
*  to automatically generate an API documentation using this information.
*
*  @author Mohammad Mohsin Laeeque
*/
class Kareo{

   // other: https://webservice.kareo.com/services/soap/2.1/KareoServices.svc?wsdl
  protected $service_url = 'https://webservice.kareo.com/services/soap/2.1/KareoServices.svc?singleWsdl';
  protected $user = '';
  protected $password = '';
  protected $customerKey = '';
  protected $filters = '';
  protected $fields = '';

  public function __construct()
  {
    $this->user = env('KAREO_USER', '');
    $this->password = env('KAREO_PASSWORD', '');
    $this->customerKey = env('KAREO_CUSTOMERKEY', '');
  }

  private function getRequestHeaders()
  {
    $requestHeader = new stdClass;
    $requestHeader->User = $this->user;
    $requestHeader->Password = $this->password;
    $requestHeader->CustomerKey = $this->customerKey;
    return $requestHeader;
  }

  function setFilters($props = array())
  {
    $filters = new stdClass;
    if (count($props) > 0) {
      foreach ($props as $key => $val) {
        $filters->$key = $val;
      }
    }
    $this->filters = (object)$filters;
  }

  function getFilters($props = array())
  {
    return $this->filters;
  }

  function setFieldsFilters($props = array())
  {
    $fields = new stdClass;
    if (count($props) > 0) {
      foreach ($props as $val) {
        $fields->$val = true;
      }
    }
    $this->fields = (object)$fields;
  }

  function getFieldsFilters($props = array())
  {
    return $this->fields;
  }

  public function GetPatients()
  {
    $soapClient = new SoapClient($this->service_url, array('trace' => 1, 'exceptions' => 1));

    $request = new stdClass;
    $request->RequestHeader = $this->getRequestHeaders();
    $request->Filter = $this->getFilters();
    $request->Fields = $this->getFieldsFilters();
    $response = $soapClient->GetPatients(array('request' => $request));
    return $response;
  }

  public function GetPatient()
  {
    $soapClient = new SoapClient($this->service_url, array('trace' => 1, 'exceptions' => 1));

    $request = new stdClass;
    $request->RequestHeader = $this->getRequestHeaders();
    $request->Filter = $this->getFilters();
    $request->Fields = $this->getFieldsFilters();
    $response = $soapClient->GetPatients(array('request' => $request));
    return $response;
  }
}