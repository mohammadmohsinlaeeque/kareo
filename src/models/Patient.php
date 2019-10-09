<?php

namespace App\Libraries\Kareo;

class Patient
{

    protected $AddressLine1;
    protected $AddressLine2;
    protected $Adjustments;
    protected $Age;
    protected $AlertMessage;
    protected $AlertShowWhenDisplayingPatientDetails;
    protected $AlertShowWhenEnteringEncounters;
    protected $AlertShowWhenPostingPayments;
    protected $AlertShowWhenPreparingPatientStatements;
    protected $AlertShowWhenSchedulingAppointments;
    protected $AlertShowWhenViewingClaimDetails;
    protected $Charges;
    protected $City;
    protected $CollectionCategoryName;
    protected $Country;
    protected $CreatedDate;
    protected $DOB;
    protected $DefaultRenderingProviderFullName;
    protected $DefaultRenderingProviderId;
    protected $DefaultServiceLocationBillingName;
    protected $DefaultServiceLocationFaxPhone;
    protected $DefaultServiceLocationFaxPhoneExt;
    protected $DefaultServiceLocationId;
    protected $DefaultServiceLocationName;
    protected $DefaultServiceLocationNameAddressLine1;
    protected $DefaultServiceLocationNameAddressLine2;
    protected $DefaultServiceLocationNameCity;
    protected $DefaultServiceLocationNameCountry;
    protected $DefaultServiceLocationNameState;
    protected $DefaultServiceLocationNameZipCode;
    protected $DefaultServiceLocationPhone;
    protected $DefaultServiceLocationPhoneExt;
    protected $EmailAddress;
    protected $EmergencyName;
    protected $EmergencyPhone;
    protected $EmergencyPhoneExt;
    protected $EmployerName;
    protected $EmploymentStatus;
    protected $FirstName;
    protected $Gender;
    protected $GuarantorDifferentThanPatient;
    protected $GuarantorFirstName;
    protected $GuarantorLastName;
    protected $GuarantorMiddleName;
    protected $GuarantorPrefix;
    protected $GuarantorSuffix;
    protected $HomePhone;
    protected $HomePhoneExt;
    protected $ID;
    protected $InsuranceBalance;
    protected $InsurancePayments;
    protected $LastAppointmentDate;
    protected $LastDiagnosis;
    protected $LastEncounterDate;
    protected $LastModifiedDate;
    protected $LastName;
    protected $LastPaymentDate;
    protected $LastStatementDate;
    protected $MaritalStatus;
    protected $MedicalRecordNumber;
    protected $MiddleName;
    protected $MobilePhone;
    protected $MobilePhoneExt;
    protected $MostRecentNote1Date;
    protected $MostRecentNote1Message;
    protected $MostRecentNote1User;
    protected $MostRecentNote2Date;
    protected $MostRecentNote2Message;
    protected $MostRecentNote2User;
    protected $MostRecentNote3Date;
    protected $MostRecentNote3Message;
    protected $MostRecentNote3User;
    protected $MostRecentNote4Date;
    protected $MostRecentNote4Message;
    protected $MostRecentNote4User;
    protected $PatientBalance;
    protected $PatientFullName;
    protected $PatientPayments;
    protected $PracticeId;
    protected $PracticeName;
    protected $Prefix;
    protected $PrimaryCarePhysicianFullName;
    protected $PrimaryCarePhysicianId;
    protected $PrimaryInsurancePolicyCompanyID;
    protected $PrimaryInsurancePolicyCompanyName;
    protected $PrimaryInsurancePolicyCopay;
    protected $PrimaryInsurancePolicyDeductible;
    protected $PrimaryInsurancePolicyEffectiveEndDate;
    protected $PrimaryInsurancePolicyEffectiveStartDate;
    protected $PrimaryInsurancePolicyGroupNumber;
    protected $PrimaryInsurancePolicyInsuredAddressLine1;
    protected $PrimaryInsurancePolicyInsuredAddressLine2;
    protected $PrimaryInsurancePolicyInsuredCity;
    protected $PrimaryInsurancePolicyInsuredCountry;
    protected $PrimaryInsurancePolicyInsuredDateOfBirth;
    protected $PrimaryInsurancePolicyInsuredFullName;
    protected $PrimaryInsurancePolicyInsuredGender;
    protected $PrimaryInsurancePolicyInsuredIDNumber;
    protected $PrimaryInsurancePolicyInsuredNotes;
    protected $PrimaryInsurancePolicyInsuredSocialSecurityNumber;
    protected $PrimaryInsurancePolicyInsuredState;
    protected $PrimaryInsurancePolicyInsuredZipCode;
    protected $PrimaryInsurancePolicyNumber;
    protected $PrimaryInsurancePolicyPatientRelationshipToInsured;
    protected $PrimaryInsurancePolicyPlanAddressLine1;
    protected $PrimaryInsurancePolicyPlanAddressLine2;
    protected $PrimaryInsurancePolicyPlanAdjusterFullName;
    protected $PrimaryInsurancePolicyPlanCity;
    protected $PrimaryInsurancePolicyPlanCountry;
    protected $PrimaryInsurancePolicyPlanFaxNumber;
    protected $PrimaryInsurancePolicyPlanFaxNumberExt;
    protected $PrimaryInsurancePolicyPlanID;
    protected $PrimaryInsurancePolicyPlanName;
    protected $PrimaryInsurancePolicyPlanPhoneNumber;
    protected $PrimaryInsurancePolicyPlanPhoneNumberExt;
    protected $PrimaryInsurancePolicyPlanState;
    protected $PrimaryInsurancePolicyPlanZipCode;
    protected $ReferralSource;
    protected $ReferringProviderFullName;
    protected $ReferringProviderId;
    protected $SSN;
    protected $SecondaryInsurancePolicyCompanyID;
    protected $SecondaryInsurancePolicyCompanyName;
    protected $SecondaryInsurancePolicyCopay;
    protected $SecondaryInsurancePolicyDeductible;
    protected $SecondaryInsurancePolicyEffectiveEndDate;
    protected $SecondaryInsurancePolicyEffectiveStartDate;
    protected $SecondaryInsurancePolicyGroupNumber;
    protected $SecondaryInsurancePolicyInsuredAddressLine1;
    protected $SecondaryInsurancePolicyInsuredAddressLine2;
    protected $SecondaryInsurancePolicyInsuredCity;
    protected $SecondaryInsurancePolicyInsuredCountry;
    protected $SecondaryInsurancePolicyInsuredDateOfBirth;
    protected $SecondaryInsurancePolicyInsuredFullName;
    protected $SecondaryInsurancePolicyInsuredGender;
    protected $SecondaryInsurancePolicyInsuredIDNumber;
    protected $SecondaryInsurancePolicyInsuredNotes;
    protected $SecondaryInsurancePolicyInsuredSocialSecurityNumber;
    protected $SecondaryInsurancePolicyInsuredState;
    protected $SecondaryInsurancePolicyInsuredZipCode;
    protected $SecondaryInsurancePolicyNumber;
    protected $SecondaryInsurancePolicyPatientRelationshipToInsured;
    protected $SecondaryInsurancePolicyPlanAddressLine1;
    protected $SecondaryInsurancePolicyPlanAddressLine2;
    protected $SecondaryInsurancePolicyPlanAdjusterFullName;
    protected $SecondaryInsurancePolicyPlanCity;
    protected $SecondaryInsurancePolicyPlanCountry;
    protected $SecondaryInsurancePolicyPlanFaxNumber;
    protected $SecondaryInsurancePolicyPlanFaxNumberExt;
    protected $SecondaryInsurancePolicyPlanID;
    protected $SecondaryInsurancePolicyPlanName;
    protected $SecondaryInsurancePolicyPlanPhoneNumber;
    protected $SecondaryInsurancePolicyPlanPhoneNumberExt;
    protected $SecondaryInsurancePolicyPlanState;
    protected $SecondaryInsurancePolicyPlanZipCode;
    protected $State;
    protected $StatementNote;
    protected $Suffix;
    protected $TotalBalance;
    protected $WorkPhone;
    protected $WorkPhoneExt;
    protected $ZipCode;

    public function getAddressLine1()
    {
        return $this->AddressLine1;
    }

    public function getAddressLine2()
    {
        return $this->AddressLine2;
    }

    public function getAdjustments()
    {
        return $this->Adjustments;
    }

    public function getAge()
    {
        return $this->Age;
    }

    public function getAlertMessage()
    {
        return $this->AlertMessage;
    }

    public function getAlertShowWhenDisplayingPatientDetails()
    {
        return $this->AlertShowWhenDisplayingPatientDetails;
    }

    public function getAlertShowWhenEnteringEncounters()
    {
        return $this->AlertShowWhenEnteringEncounters;
    }

    public function getAlertShowWhenPostingPayments()
    {
        return $this->AlertShowWhenPostingPayments;
    }

    public function getAlertShowWhenPreparingPatientStatements()
    {
        return $this->AlertShowWhenPreparingPatientStatements;
    }

    public function getAlertShowWhenSchedulingAppointments()
    {
        return $this->AlertShowWhenSchedulingAppointments;
    }

    public function getAlertShowWhenViewingClaimDetails()
    {
        return $this->AlertShowWhenViewingClaimDetails;
    }

    public function getCharges()
    {
        return $this->Charges;
    }

    public function getCity()
    {
        return $this->City;
    }

    public function getCollectionCategoryName()
    {
        return $this->CollectionCategoryName;
    }

    public function getCountry()
    {
        return $this->Country;
    }

    public function getCreatedDate()
    {
        return $this->CreatedDate;
    }

    public function getDOB()
    {
        return $this->DOB;
    }

    public function getDefaultRenderingProviderFullName()
    {
        return $this->DefaultRenderingProviderFullName;
    }

    public function getDefaultRenderingProviderId()
    {
        return $this->DefaultRenderingProviderId;
    }

    public function getDefaultServiceLocationBillingName()
    {
        return $this->DefaultServiceLocationBillingName;
    }

    public function getDefaultServiceLocationFaxPhone()
    {
        return $this->DefaultServiceLocationFaxPhone;
    }

    public function getDefaultServiceLocationFaxPhoneExt()
    {
        return $this->DefaultServiceLocationFaxPhoneExt;
    }

    public function getDefaultServiceLocationId()
    {
        return $this->DefaultServiceLocationId;
    }

    public function getDefaultServiceLocationName()
    {
        return $this->DefaultServiceLocationName;
    }

    public function getDefaultServiceLocationNameAddressLine1()
    {
        return $this->DefaultServiceLocationNameAddressLine1;
    }

    public function getDefaultServiceLocationNameAddressLine2()
    {
        return $this->DefaultServiceLocationNameAddressLine2;
    }

    public function getDefaultServiceLocationNameCity()
    {
        return $this->DefaultServiceLocationNameCity;
    }

    public function getDefaultServiceLocationNameCountry()
    {
        return $this->DefaultServiceLocationNameCountry;
    }

    public function getDefaultServiceLocationNameState()
    {
        return $this->DefaultServiceLocationNameState;
    }

    public function getDefaultServiceLocationNameZipCode()
    {
        return $this->DefaultServiceLocationNameZipCode;
    }

    public function getDefaultServiceLocationPhone()
    {
        return $this->DefaultServiceLocationPhone;
    }

    public function getDefaultServiceLocationPhoneExt()
    {
        return $this->DefaultServiceLocationPhoneExt;
    }

    public function getEmailAddress()
    {
        return $this->EmailAddress;
    }

    public function getEmergencyName()
    {
        return $this->EmergencyName;
    }

    public function getEmergencyPhone()
    {
        return $this->EmergencyPhone;
    }

    public function getEmergencyPhoneExt()
    {
        return $this->EmergencyPhoneExt;
    }

    public function getEmployerName()
    {
        return $this->EmployerName;
    }

    public function getEmploymentStatus()
    {
        return $this->EmploymentStatus;
    }

    public function getFirstName()
    {
        return $this->FirstName;
    }

    public function getGender()
    {
        return $this->Gender;
    }

    public function getGuarantorDifferentThanPatient()
    {
        return $this->GuarantorDifferentThanPatient;
    }

    public function getGuarantorFirstName()
    {
        return $this->GuarantorFirstName;
    }

    public function getGuarantorLastName()
    {
        return $this->GuarantorLastName;
    }

    public function getGuarantorMiddleName()
    {
        return $this->GuarantorMiddleName;
    }

    public function getGuarantorPrefix()
    {
        return $this->GuarantorPrefix;
    }

    public function getGuarantorSuffix()
    {
        return $this->GuarantorSuffix;
    }

    public function getHomePhone()
    {
        return $this->HomePhone;
    }

    public function getHomePhoneExt()
    {
        return $this->HomePhoneExt;
    }

    public function getID()
    {
        return $this->ID;
    }

    public function getInsuranceBalance()
    {
        return $this->InsuranceBalance;
    }

    public function getInsurancePayments()
    {
        return $this->InsurancePayments;
    }

    public function getLastAppointmentDate()
    {
        return $this->LastAppointmentDate;
    }

    public function getLastDiagnosis()
    {
        return $this->LastDiagnosis;
    }

    public function getLastEncounterDate()
    {
        return $this->LastEncounterDate;
    }

    public function getLastModifiedDate()
    {
        return $this->LastModifiedDate;
    }

    public function getLastName()
    {
        return $this->LastName;
    }

    public function getLastPaymentDate()
    {
        return $this->LastPaymentDate;
    }

    public function getLastStatementDate()
    {
        return $this->LastStatementDate;
    }

    public function getMaritalStatus()
    {
        return $this->MaritalStatus;
    }

    public function getMedicalRecordNumber()
    {
        return $this->MedicalRecordNumber;
    }

    public function getMiddleName()
    {
        return $this->MiddleName;
    }

    public function getMobilePhone()
    {
        return $this->MobilePhone;
    }

    public function getMobilePhoneExt()
    {
        return $this->MobilePhoneExt;
    }

    public function getMostRecentNote1Date()
    {
        return $this->MostRecentNote1Date;
    }

    public function getMostRecentNote1Message()
    {
        return $this->MostRecentNote1Message;
    }

    public function getMostRecentNote1User()
    {
        return $this->MostRecentNote1User;
    }

    public function getMostRecentNote2Date()
    {
        return $this->MostRecentNote2Date;
    }

    public function getMostRecentNote2Message()
    {
        return $this->MostRecentNote2Message;
    }

    public function getMostRecentNote2User()
    {
        return $this->MostRecentNote2User;
    }

    public function getMostRecentNote3Date()
    {
        return $this->MostRecentNote3Date;
    }

    public function getMostRecentNote3Message()
    {
        return $this->MostRecentNote3Message;
    }

    public function getMostRecentNote3User()
    {
        return $this->MostRecentNote3User;
    }

    public function getMostRecentNote4Date()
    {
        return $this->MostRecentNote4Date;
    }

    public function getMostRecentNote4Message()
    {
        return $this->MostRecentNote4Message;
    }

    public function getMostRecentNote4User()
    {
        return $this->MostRecentNote4User;
    }

    public function getPatientBalance()
    {
        return $this->PatientBalance;
    }

    public function getPatientFullName()
    {
        return $this->PatientFullName;
    }

    public function getPatientPayments()
    {
        return $this->PatientPayments;
    }

    public function getPracticeId()
    {
        return $this->PracticeId;
    }

    public function getPracticeName()
    {
        return $this->PracticeName;
    }

    public function getPrefix()
    {
        return $this->Prefix;
    }

    public function getPrimaryCarePhysicianFullName()
    {
        return $this->PrimaryCarePhysicianFullName;
    }

    public function getPrimaryCarePhysicianId()
    {
        return $this->PrimaryCarePhysicianId;
    }

    public function getPrimaryInsurancePolicyCompanyID()
    {
        return $this->PrimaryInsurancePolicyCompanyID;
    }

    public function getPrimaryInsurancePolicyCompanyName()
    {
        return $this->PrimaryInsurancePolicyCompanyName;
    }

    public function getPrimaryInsurancePolicyCopay()
    {
        return $this->PrimaryInsurancePolicyCopay;
    }

    public function getPrimaryInsurancePolicyDeductible()
    {
        return $this->PrimaryInsurancePolicyDeductible;
    }

    public function getPrimaryInsurancePolicyEffectiveEndDate()
    {
        return $this->PrimaryInsurancePolicyEffectiveEndDate;
    }

    public function getPrimaryInsurancePolicyEffectiveStartDate()
    {
        return $this->PrimaryInsurancePolicyEffectiveStartDate;
    }

    public function getPrimaryInsurancePolicyGroupNumber()
    {
        return $this->PrimaryInsurancePolicyGroupNumber;
    }

    public function getPrimaryInsurancePolicyInsuredAddressLine1()
    {
        return $this->PrimaryInsurancePolicyInsuredAddressLine1;
    }

    public function getPrimaryInsurancePolicyInsuredAddressLine2()
    {
        return $this->PrimaryInsurancePolicyInsuredAddressLine2;
    }

    public function getPrimaryInsurancePolicyInsuredCity()
    {
        return $this->PrimaryInsurancePolicyInsuredCity;
    }

    public function getPrimaryInsurancePolicyInsuredCountry()
    {
        return $this->PrimaryInsurancePolicyInsuredCountry;
    }

    public function getPrimaryInsurancePolicyInsuredDateOfBirth()
    {
        return $this->PrimaryInsurancePolicyInsuredDateOfBirth;
    }

    public function getPrimaryInsurancePolicyInsuredFullName()
    {
        return $this->PrimaryInsurancePolicyInsuredFullName;
    }

    public function getPrimaryInsurancePolicyInsuredGender()
    {
        return $this->PrimaryInsurancePolicyInsuredGender;
    }

    public function getPrimaryInsurancePolicyInsuredIDNumber()
    {
        return $this->PrimaryInsurancePolicyInsuredIDNumber;
    }

    public function getPrimaryInsurancePolicyInsuredNotes()
    {
        return $this->PrimaryInsurancePolicyInsuredNotes;
    }

    public function getPrimaryInsurancePolicyInsuredSocialSecurityNumber()
    {
        return $this->PrimaryInsurancePolicyInsuredSocialSecurityNumber;
    }

    public function getPrimaryInsurancePolicyInsuredState()
    {
        return $this->PrimaryInsurancePolicyInsuredState;
    }

    public function getPrimaryInsurancePolicyInsuredZipCode()
    {
        return $this->PrimaryInsurancePolicyInsuredZipCode;
    }

    public function getPrimaryInsurancePolicyNumber()
    {
        return $this->PrimaryInsurancePolicyNumber;
    }

    public function getPrimaryInsurancePolicyPatientRelationshipToInsured()
    {
        return $this->PrimaryInsurancePolicyPatientRelationshipToInsured;
    }

    public function getPrimaryInsurancePolicyPlanAddressLine1()
    {
        return $this->PrimaryInsurancePolicyPlanAddressLine1;
    }

    public function getPrimaryInsurancePolicyPlanAddressLine2()
    {
        return $this->PrimaryInsurancePolicyPlanAddressLine2;
    }

    public function getPrimaryInsurancePolicyPlanAdjusterFullName()
    {
        return $this->PrimaryInsurancePolicyPlanAdjusterFullName;
    }

    public function getPrimaryInsurancePolicyPlanCity()
    {
        return $this->PrimaryInsurancePolicyPlanCity;
    }

    public function getPrimaryInsurancePolicyPlanCountry()
    {
        return $this->PrimaryInsurancePolicyPlanCountry;
    }

    public function getPrimaryInsurancePolicyPlanFaxNumber()
    {
        return $this->PrimaryInsurancePolicyPlanFaxNumber;
    }

    public function getPrimaryInsurancePolicyPlanFaxNumberExt()
    {
        return $this->PrimaryInsurancePolicyPlanFaxNumberExt;
    }

    public function getPrimaryInsurancePolicyPlanID()
    {
        return $this->PrimaryInsurancePolicyPlanID;
    }

    public function getPrimaryInsurancePolicyPlanName()
    {
        return $this->PrimaryInsurancePolicyPlanName;
    }

    public function getPrimaryInsurancePolicyPlanPhoneNumber()
    {
        return $this->PrimaryInsurancePolicyPlanPhoneNumber;
    }

    public function getPrimaryInsurancePolicyPlanPhoneNumberExt()
    {
        return $this->PrimaryInsurancePolicyPlanPhoneNumberExt;
    }

    public function getPrimaryInsurancePolicyPlanState()
    {
        return $this->PrimaryInsurancePolicyPlanState;
    }

    public function getPrimaryInsurancePolicyPlanZipCode()
    {
        return $this->PrimaryInsurancePolicyPlanZipCode;
    }

    public function getReferralSource()
    {
        return $this->ReferralSource;
    }

    public function getReferringProviderFullName()
    {
        return $this->ReferringProviderFullName;
    }

    public function getReferringProviderId()
    {
        return $this->ReferringProviderId;
    }

    public function getSSN()
    {
        return $this->SSN;
    }

    public function getSecondaryInsurancePolicyCompanyID()
    {
        return $this->SecondaryInsurancePolicyCompanyID;
    }

    public function getSecondaryInsurancePolicyCompanyName()
    {
        return $this->SecondaryInsurancePolicyCompanyName;
    }

    public function getSecondaryInsurancePolicyCopay()
    {
        return $this->SecondaryInsurancePolicyCopay;
    }

    public function getSecondaryInsurancePolicyDeductible()
    {
        return $this->SecondaryInsurancePolicyDeductible;
    }

    public function getSecondaryInsurancePolicyEffectiveEndDate()
    {
        return $this->SecondaryInsurancePolicyEffectiveEndDate;
    }

    public function getSecondaryInsurancePolicyEffectiveStartDate()
    {
        return $this->SecondaryInsurancePolicyEffectiveStartDate;
    }

    public function getSecondaryInsurancePolicyGroupNumber()
    {
        return $this->SecondaryInsurancePolicyGroupNumber;
    }

    public function getSecondaryInsurancePolicyInsuredAddressLine1()
    {
        return $this->SecondaryInsurancePolicyInsuredAddressLine1;
    }

    public function getSecondaryInsurancePolicyInsuredAddressLine2()
    {
        return $this->SecondaryInsurancePolicyInsuredAddressLine2;
    }

    public function getSecondaryInsurancePolicyInsuredCity()
    {
        return $this->SecondaryInsurancePolicyInsuredCity;
    }

    public function getSecondaryInsurancePolicyInsuredCountry()
    {
        return $this->SecondaryInsurancePolicyInsuredCountry;
    }

    public function getSecondaryInsurancePolicyInsuredDateOfBirth()
    {
        return $this->SecondaryInsurancePolicyInsuredDateOfBirth;
    }

    public function getSecondaryInsurancePolicyInsuredFullName()
    {
        return $this->SecondaryInsurancePolicyInsuredFullName;
    }

    public function getSecondaryInsurancePolicyInsuredGender()
    {
        return $this->SecondaryInsurancePolicyInsuredGender;
    }

    public function getSecondaryInsurancePolicyInsuredIDNumber()
    {
        return $this->SecondaryInsurancePolicyInsuredIDNumber;
    }

    public function getSecondaryInsurancePolicyInsuredNotes()
    {
        return $this->SecondaryInsurancePolicyInsuredNotes;
    }

    public function getSecondaryInsurancePolicyInsuredSocialSecurityNumber()
    {
        return $this->SecondaryInsurancePolicyInsuredSocialSecurityNumber;
    }

    public function getSecondaryInsurancePolicyInsuredState()
    {
        return $this->SecondaryInsurancePolicyInsuredState;
    }

    public function getSecondaryInsurancePolicyInsuredZipCode()
    {
        return $this->SecondaryInsurancePolicyInsuredZipCode;
    }

    public function getSecondaryInsurancePolicyNumber()
    {
        return $this->SecondaryInsurancePolicyNumber;
    }

    public function getSecondaryInsurancePolicyPatientRelationshipToInsured()
    {
        return $this->SecondaryInsurancePolicyPatientRelationshipToInsured;
    }

    public function getSecondaryInsurancePolicyPlanAddressLine1()
    {
        return $this->SecondaryInsurancePolicyPlanAddressLine1;
    }

    public function getSecondaryInsurancePolicyPlanAddressLine2()
    {
        return $this->SecondaryInsurancePolicyPlanAddressLine2;
    }

    public function getSecondaryInsurancePolicyPlanAdjusterFullName()
    {
        return $this->SecondaryInsurancePolicyPlanAdjusterFullName;
    }

    public function getSecondaryInsurancePolicyPlanCity()
    {
        return $this->SecondaryInsurancePolicyPlanCity;
    }

    public function getSecondaryInsurancePolicyPlanCountry()
    {
        return $this->SecondaryInsurancePolicyPlanCountry;
    }

    public function getSecondaryInsurancePolicyPlanFaxNumber()
    {
        return $this->SecondaryInsurancePolicyPlanFaxNumber;
    }

    public function getSecondaryInsurancePolicyPlanFaxNumberExt()
    {
        return $this->SecondaryInsurancePolicyPlanFaxNumberExt;
    }

    public function getSecondaryInsurancePolicyPlanID()
    {
        return $this->SecondaryInsurancePolicyPlanID;
    }

    public function getSecondaryInsurancePolicyPlanName()
    {
        return $this->SecondaryInsurancePolicyPlanName;
    }

    public function getSecondaryInsurancePolicyPlanPhoneNumber()
    {
        return $this->SecondaryInsurancePolicyPlanPhoneNumber;
    }

    public function getSecondaryInsurancePolicyPlanPhoneNumberExt()
    {
        return $this->SecondaryInsurancePolicyPlanPhoneNumberExt;
    }

    public function getSecondaryInsurancePolicyPlanState()
    {
        return $this->SecondaryInsurancePolicyPlanState;
    }

    public function getSecondaryInsurancePolicyPlanZipCode()
    {
        return $this->SecondaryInsurancePolicyPlanZipCode;
    }

    public function getState()
    {
        return $this->State;
    }

    public function getStatementNote()
    {
        return $this->StatementNote;
    }

    public function getSuffix()
    {
        return $this->Suffix;
    }

    public function getTotalBalance()
    {
        return $this->TotalBalance;
    }

    public function getWorkPhone()
    {
        return $this->WorkPhone;
    }

    public function getWorkPhoneExt()
    {
        return $this->WorkPhoneExt;
    }

    public function getZipCode()
    {
        return $this->ZipCode;
    }

    public function setAddressLine1($AddressLine1)
    {
        $this->AddressLine1 = $AddressLine1;
    }

    public function setAddressLine2($AddressLine2)
    {
        $this->AddressLine2 = $AddressLine2;
    }

    public function setAdjustments($Adjustments)
    {
        $this->Adjustments = $Adjustments;
    }

    public function setAge($Age)
    {
        $this->Age = $Age;
    }

    public function setAlertMessage($AlertMessage)
    {
        $this->AlertMessage = $AlertMessage;
    }

    public function setAlertShowWhenDisplayingPatientDetails($AlertShowWhenDisplayingPatientDetails)
    {
        $this->AlertShowWhenDisplayingPatientDetails = $AlertShowWhenDisplayingPatientDetails;
    }

    public function setAlertShowWhenEnteringEncounters($AlertShowWhenEnteringEncounters)
    {
        $this->AlertShowWhenEnteringEncounters = $AlertShowWhenEnteringEncounters;
    }

    public function setAlertShowWhenPostingPayments($AlertShowWhenPostingPayments)
    {
        $this->AlertShowWhenPostingPayments = $AlertShowWhenPostingPayments;
    }

    public function setAlertShowWhenPreparingPatientStatements($AlertShowWhenPreparingPatientStatements)
    {
        $this->AlertShowWhenPreparingPatientStatements = $AlertShowWhenPreparingPatientStatements;
    }

    public function setAlertShowWhenSchedulingAppointments($AlertShowWhenSchedulingAppointments)
    {
        $this->AlertShowWhenSchedulingAppointments = $AlertShowWhenSchedulingAppointments;
    }

    public function setAlertShowWhenViewingClaimDetails($AlertShowWhenViewingClaimDetails)
    {
        $this->AlertShowWhenViewingClaimDetails = $AlertShowWhenViewingClaimDetails;
    }

    public function setCharges($Charges)
    {
        $this->Charges = $Charges;
    }

    public function setCity($City)
    {
        $this->City = $City;
    }

    public function setCollectionCategoryName($CollectionCategoryName)
    {
        $this->CollectionCategoryName = $CollectionCategoryName;
    }

    public function setCountry($Country)
    {
        $this->Country = $Country;
    }

    public function setCreatedDate($CreatedDate)
    {
        $this->CreatedDate = $CreatedDate;
    }

    public function setDOB($DOB)
    {
        $this->DOB = $DOB;
    }

    public function setDefaultRenderingProviderFullName($DefaultRenderingProviderFullName)
    {
        $this->DefaultRenderingProviderFullName = $DefaultRenderingProviderFullName;
    }

    public function setDefaultRenderingProviderId($DefaultRenderingProviderId)
    {
        $this->DefaultRenderingProviderId = $DefaultRenderingProviderId;
    }

    public function setDefaultServiceLocationBillingName($DefaultServiceLocationBillingName)
    {
        $this->DefaultServiceLocationBillingName = $DefaultServiceLocationBillingName;
    }

    public function setDefaultServiceLocationFaxPhone($DefaultServiceLocationFaxPhone)
    {
        $this->DefaultServiceLocationFaxPhone = $DefaultServiceLocationFaxPhone;
    }

    public function setDefaultServiceLocationFaxPhoneExt($DefaultServiceLocationFaxPhoneExt)
    {
        $this->DefaultServiceLocationFaxPhoneExt = $DefaultServiceLocationFaxPhoneExt;
    }

    public function setDefaultServiceLocationId($DefaultServiceLocationId)
    {
        $this->DefaultServiceLocationId = $DefaultServiceLocationId;
    }

    public function setDefaultServiceLocationName($DefaultServiceLocationName)
    {
        $this->DefaultServiceLocationName = $DefaultServiceLocationName;
    }

    public function setDefaultServiceLocationNameAddressLine1($DefaultServiceLocationNameAddressLine1)
    {
        $this->DefaultServiceLocationNameAddressLine1 = $DefaultServiceLocationNameAddressLine1;
    }

    public function setDefaultServiceLocationNameAddressLine2($DefaultServiceLocationNameAddressLine2)
    {
        $this->DefaultServiceLocationNameAddressLine2 = $DefaultServiceLocationNameAddressLine2;
    }

    public function setDefaultServiceLocationNameCity($DefaultServiceLocationNameCity)
    {
        $this->DefaultServiceLocationNameCity = $DefaultServiceLocationNameCity;
    }

    public function setDefaultServiceLocationNameCountry($DefaultServiceLocationNameCountry)
    {
        $this->DefaultServiceLocationNameCountry = $DefaultServiceLocationNameCountry;
    }

    public function setDefaultServiceLocationNameState($DefaultServiceLocationNameState)
    {
        $this->DefaultServiceLocationNameState = $DefaultServiceLocationNameState;
    }

    public function setDefaultServiceLocationNameZipCode($DefaultServiceLocationNameZipCode)
    {
        $this->DefaultServiceLocationNameZipCode = $DefaultServiceLocationNameZipCode;
    }

    public function setDefaultServiceLocationPhone($DefaultServiceLocationPhone)
    {
        $this->DefaultServiceLocationPhone = $DefaultServiceLocationPhone;
    }

    public function setDefaultServiceLocationPhoneExt($DefaultServiceLocationPhoneExt)
    {
        $this->DefaultServiceLocationPhoneExt = $DefaultServiceLocationPhoneExt;
    }

    public function setEmailAddress($EmailAddress)
    {
        $this->EmailAddress = $EmailAddress;
    }

    public function setEmergencyName($EmergencyName)
    {
        $this->EmergencyName = $EmergencyName;
    }

    public function setEmergencyPhone($EmergencyPhone)
    {
        $this->EmergencyPhone = $EmergencyPhone;
    }

    public function setEmergencyPhoneExt($EmergencyPhoneExt)
    {
        $this->EmergencyPhoneExt = $EmergencyPhoneExt;
    }

    public function setEmployerName($EmployerName)
    {
        $this->EmployerName = $EmployerName;
    }

    public function setEmploymentStatus($EmploymentStatus)
    {
        $this->EmploymentStatus = $EmploymentStatus;
    }

    public function setFirstName($FirstName)
    {
        $this->FirstName = $FirstName;
    }

    public function setGender($Gender)
    {
        $this->Gender = $Gender;
    }

    public function setGuarantorDifferentThanPatient($GuarantorDifferentThanPatient)
    {
        $this->GuarantorDifferentThanPatient = $GuarantorDifferentThanPatient;
    }

    public function setGuarantorFirstName($GuarantorFirstName)
    {
        $this->GuarantorFirstName = $GuarantorFirstName;
    }

    public function setGuarantorLastName($GuarantorLastName)
    {
        $this->GuarantorLastName = $GuarantorLastName;
    }

    public function setGuarantorMiddleName($GuarantorMiddleName)
    {
        $this->GuarantorMiddleName = $GuarantorMiddleName;
    }

    public function setGuarantorPrefix($GuarantorPrefix)
    {
        $this->GuarantorPrefix = $GuarantorPrefix;
    }

    public function setGuarantorSuffix($GuarantorSuffix)
    {
        $this->GuarantorSuffix = $GuarantorSuffix;
    }

    public function setHomePhone($HomePhone)
    {
        $this->HomePhone = $HomePhone;
    }

    public function setHomePhoneExt($HomePhoneExt)
    {
        $this->HomePhoneExt = $HomePhoneExt;
    }

    public function setID($ID)
    {
        $this->ID = $ID;
    }

    public function setInsuranceBalance($InsuranceBalance)
    {
        $this->InsuranceBalance = $InsuranceBalance;
    }

    public function setInsurancePayments($InsurancePayments)
    {
        $this->InsurancePayments = $InsurancePayments;
    }

    public function setLastAppointmentDate($LastAppointmentDate)
    {
        $this->LastAppointmentDate = $LastAppointmentDate;
    }

    public function setLastDiagnosis($LastDiagnosis)
    {
        $this->LastDiagnosis = $LastDiagnosis;
    }

    public function setLastEncounterDate($LastEncounterDate)
    {
        $this->LastEncounterDate = $LastEncounterDate;
    }

    public function setLastModifiedDate($LastModifiedDate)
    {
        $this->LastModifiedDate = $LastModifiedDate;
    }

    public function setLastName($LastName)
    {
        $this->LastName = $LastName;
    }

    public function setLastPaymentDate($LastPaymentDate)
    {
        $this->LastPaymentDate = $LastPaymentDate;
    }

    public function setLastStatementDate($LastStatementDate)
    {
        $this->LastStatementDate = $LastStatementDate;
    }

    public function setMaritalStatus($MaritalStatus)
    {
        $this->MaritalStatus = $MaritalStatus;
    }

    public function setMedicalRecordNumber($MedicalRecordNumber)
    {
        $this->MedicalRecordNumber = $MedicalRecordNumber;
    }

    public function setMiddleName($MiddleName)
    {
        $this->MiddleName = $MiddleName;
    }

    public function setMobilePhone($MobilePhone)
    {
        $this->MobilePhone = $MobilePhone;
    }

    public function setMobilePhoneExt($MobilePhoneExt)
    {
        $this->MobilePhoneExt = $MobilePhoneExt;
    }

    public function setMostRecentNote1Date($MostRecentNote1Date)
    {
        $this->MostRecentNote1Date = $MostRecentNote1Date;
    }

    public function setMostRecentNote1Message($MostRecentNote1Message)
    {
        $this->MostRecentNote1Message = $MostRecentNote1Message;
    }

    public function setMostRecentNote1User($MostRecentNote1User)
    {
        $this->MostRecentNote1User = $MostRecentNote1User;
    }

    public function setMostRecentNote2Date($MostRecentNote2Date)
    {
        $this->MostRecentNote2Date = $MostRecentNote2Date;
    }

    public function setMostRecentNote2Message($MostRecentNote2Message)
    {
        $this->MostRecentNote2Message = $MostRecentNote2Message;
    }

    public function setMostRecentNote2User($MostRecentNote2User)
    {
        $this->MostRecentNote2User = $MostRecentNote2User;
    }

    public function setMostRecentNote3Date($MostRecentNote3Date)
    {
        $this->MostRecentNote3Date = $MostRecentNote3Date;
    }

    public function setMostRecentNote3Message($MostRecentNote3Message)
    {
        $this->MostRecentNote3Message = $MostRecentNote3Message;
    }

    public function setMostRecentNote3User($MostRecentNote3User)
    {
        $this->MostRecentNote3User = $MostRecentNote3User;
    }

    public function setMostRecentNote4Date($MostRecentNote4Date)
    {
        $this->MostRecentNote4Date = $MostRecentNote4Date;
    }

    public function setMostRecentNote4Message($MostRecentNote4Message)
    {
        $this->MostRecentNote4Message = $MostRecentNote4Message;
    }

    public function setMostRecentNote4User($MostRecentNote4User)
    {
        $this->MostRecentNote4User = $MostRecentNote4User;
    }

    public function setPatientBalance($PatientBalance)
    {
        $this->PatientBalance = $PatientBalance;
    }

    public function setPatientFullName($PatientFullName)
    {
        $this->PatientFullName = $PatientFullName;
    }

    public function setPatientPayments($PatientPayments)
    {
        $this->PatientPayments = $PatientPayments;
    }

    public function setPracticeId($PracticeId)
    {
        $this->PracticeId = $PracticeId;
    }

    public function setPracticeName($PracticeName)
    {
        $this->PracticeName = $PracticeName;
    }

    public function setPrefix($Prefix)
    {
        $this->Prefix = $Prefix;
    }

    public function setPrimaryCarePhysicianFullName($PrimaryCarePhysicianFullName)
    {
        $this->PrimaryCarePhysicianFullName = $PrimaryCarePhysicianFullName;
    }

    public function setPrimaryCarePhysicianId($PrimaryCarePhysicianId)
    {
        $this->PrimaryCarePhysicianId = $PrimaryCarePhysicianId;
    }

    public function setPrimaryInsurancePolicyCompanyID($PrimaryInsurancePolicyCompanyID)
    {
        $this->PrimaryInsurancePolicyCompanyID = $PrimaryInsurancePolicyCompanyID;
    }

    public function setPrimaryInsurancePolicyCompanyName($PrimaryInsurancePolicyCompanyName)
    {
        $this->PrimaryInsurancePolicyCompanyName = $PrimaryInsurancePolicyCompanyName;
    }

    public function setPrimaryInsurancePolicyCopay($PrimaryInsurancePolicyCopay)
    {
        $this->PrimaryInsurancePolicyCopay = $PrimaryInsurancePolicyCopay;
    }

    public function setPrimaryInsurancePolicyDeductible($PrimaryInsurancePolicyDeductible)
    {
        $this->PrimaryInsurancePolicyDeductible = $PrimaryInsurancePolicyDeductible;
    }

    public function setPrimaryInsurancePolicyEffectiveEndDate($PrimaryInsurancePolicyEffectiveEndDate)
    {
        $this->PrimaryInsurancePolicyEffectiveEndDate = $PrimaryInsurancePolicyEffectiveEndDate;
    }

    public function setPrimaryInsurancePolicyEffectiveStartDate($PrimaryInsurancePolicyEffectiveStartDate)
    {
        $this->PrimaryInsurancePolicyEffectiveStartDate = $PrimaryInsurancePolicyEffectiveStartDate;
    }

    public function setPrimaryInsurancePolicyGroupNumber($PrimaryInsurancePolicyGroupNumber)
    {
        $this->PrimaryInsurancePolicyGroupNumber = $PrimaryInsurancePolicyGroupNumber;
    }

    public function setPrimaryInsurancePolicyInsuredAddressLine1($PrimaryInsurancePolicyInsuredAddressLine1)
    {
        $this->PrimaryInsurancePolicyInsuredAddressLine1 = $PrimaryInsurancePolicyInsuredAddressLine1;
    }

    public function setPrimaryInsurancePolicyInsuredAddressLine2($PrimaryInsurancePolicyInsuredAddressLine2)
    {
        $this->PrimaryInsurancePolicyInsuredAddressLine2 = $PrimaryInsurancePolicyInsuredAddressLine2;
    }

    public function setPrimaryInsurancePolicyInsuredCity($PrimaryInsurancePolicyInsuredCity)
    {
        $this->PrimaryInsurancePolicyInsuredCity = $PrimaryInsurancePolicyInsuredCity;
    }

    public function setPrimaryInsurancePolicyInsuredCountry($PrimaryInsurancePolicyInsuredCountry)
    {
        $this->PrimaryInsurancePolicyInsuredCountry = $PrimaryInsurancePolicyInsuredCountry;
    }

    public function setPrimaryInsurancePolicyInsuredDateOfBirth($PrimaryInsurancePolicyInsuredDateOfBirth)
    {
        $this->PrimaryInsurancePolicyInsuredDateOfBirth = $PrimaryInsurancePolicyInsuredDateOfBirth;
    }

    public function setPrimaryInsurancePolicyInsuredFullName($PrimaryInsurancePolicyInsuredFullName)
    {
        $this->PrimaryInsurancePolicyInsuredFullName = $PrimaryInsurancePolicyInsuredFullName;
    }

    public function setPrimaryInsurancePolicyInsuredGender($PrimaryInsurancePolicyInsuredGender)
    {
        $this->PrimaryInsurancePolicyInsuredGender = $PrimaryInsurancePolicyInsuredGender;
    }

    public function setPrimaryInsurancePolicyInsuredIDNumber($PrimaryInsurancePolicyInsuredIDNumber)
    {
        $this->PrimaryInsurancePolicyInsuredIDNumber = $PrimaryInsurancePolicyInsuredIDNumber;
    }

    public function setPrimaryInsurancePolicyInsuredNotes($PrimaryInsurancePolicyInsuredNotes)
    {
        $this->PrimaryInsurancePolicyInsuredNotes = $PrimaryInsurancePolicyInsuredNotes;
    }

    public function setPrimaryInsurancePolicyInsuredSocialSecurityNumber($PrimaryInsurancePolicyInsuredSocialSecurityNumber)
    {
        $this->PrimaryInsurancePolicyInsuredSocialSecurityNumber = $PrimaryInsurancePolicyInsuredSocialSecurityNumber;
    }

    public function setPrimaryInsurancePolicyInsuredState($PrimaryInsurancePolicyInsuredState)
    {
        $this->PrimaryInsurancePolicyInsuredState = $PrimaryInsurancePolicyInsuredState;
    }

    public function setPrimaryInsurancePolicyInsuredZipCode($PrimaryInsurancePolicyInsuredZipCode)
    {
        $this->PrimaryInsurancePolicyInsuredZipCode = $PrimaryInsurancePolicyInsuredZipCode;
    }

    public function setPrimaryInsurancePolicyNumber($PrimaryInsurancePolicyNumber)
    {
        $this->PrimaryInsurancePolicyNumber = $PrimaryInsurancePolicyNumber;
    }

    public function setPrimaryInsurancePolicyPatientRelationshipToInsured($PrimaryInsurancePolicyPatientRelationshipToInsured)
    {
        $this->PrimaryInsurancePolicyPatientRelationshipToInsured = $PrimaryInsurancePolicyPatientRelationshipToInsured;
    }

    public function setPrimaryInsurancePolicyPlanAddressLine1($PrimaryInsurancePolicyPlanAddressLine1)
    {
        $this->PrimaryInsurancePolicyPlanAddressLine1 = $PrimaryInsurancePolicyPlanAddressLine1;
    }

    public function setPrimaryInsurancePolicyPlanAddressLine2($PrimaryInsurancePolicyPlanAddressLine2)
    {
        $this->PrimaryInsurancePolicyPlanAddressLine2 = $PrimaryInsurancePolicyPlanAddressLine2;
    }

    public function setPrimaryInsurancePolicyPlanAdjusterFullName($PrimaryInsurancePolicyPlanAdjusterFullName)
    {
        $this->PrimaryInsurancePolicyPlanAdjusterFullName = $PrimaryInsurancePolicyPlanAdjusterFullName;
    }

    public function setPrimaryInsurancePolicyPlanCity($PrimaryInsurancePolicyPlanCity)
    {
        $this->PrimaryInsurancePolicyPlanCity = $PrimaryInsurancePolicyPlanCity;
    }

    public function setPrimaryInsurancePolicyPlanCountry($PrimaryInsurancePolicyPlanCountry)
    {
        $this->PrimaryInsurancePolicyPlanCountry = $PrimaryInsurancePolicyPlanCountry;
    }

    public function setPrimaryInsurancePolicyPlanFaxNumber($PrimaryInsurancePolicyPlanFaxNumber)
    {
        $this->PrimaryInsurancePolicyPlanFaxNumber = $PrimaryInsurancePolicyPlanFaxNumber;
    }

    public function setPrimaryInsurancePolicyPlanFaxNumberExt($PrimaryInsurancePolicyPlanFaxNumberExt)
    {
        $this->PrimaryInsurancePolicyPlanFaxNumberExt = $PrimaryInsurancePolicyPlanFaxNumberExt;
    }

    public function setPrimaryInsurancePolicyPlanID($PrimaryInsurancePolicyPlanID)
    {
        $this->PrimaryInsurancePolicyPlanID = $PrimaryInsurancePolicyPlanID;
    }

    public function setPrimaryInsurancePolicyPlanName($PrimaryInsurancePolicyPlanName)
    {
        $this->PrimaryInsurancePolicyPlanName = $PrimaryInsurancePolicyPlanName;
    }

    public function setPrimaryInsurancePolicyPlanPhoneNumber($PrimaryInsurancePolicyPlanPhoneNumber)
    {
        $this->PrimaryInsurancePolicyPlanPhoneNumber = $PrimaryInsurancePolicyPlanPhoneNumber;
    }

    public function setPrimaryInsurancePolicyPlanPhoneNumberExt($PrimaryInsurancePolicyPlanPhoneNumberExt)
    {
        $this->PrimaryInsurancePolicyPlanPhoneNumberExt = $PrimaryInsurancePolicyPlanPhoneNumberExt;
    }

    public function setPrimaryInsurancePolicyPlanState($PrimaryInsurancePolicyPlanState)
    {
        $this->PrimaryInsurancePolicyPlanState = $PrimaryInsurancePolicyPlanState;
    }

    public function setPrimaryInsurancePolicyPlanZipCode($PrimaryInsurancePolicyPlanZipCode)
    {
        $this->PrimaryInsurancePolicyPlanZipCode = $PrimaryInsurancePolicyPlanZipCode;
    }

    public function setReferralSource($ReferralSource)
    {
        $this->ReferralSource = $ReferralSource;
    }

    public function setReferringProviderFullName($ReferringProviderFullName)
    {
        $this->ReferringProviderFullName = $ReferringProviderFullName;
    }

    public function setReferringProviderId($ReferringProviderId)
    {
        $this->ReferringProviderId = $ReferringProviderId;
    }

    public function setSSN($SSN)
    {
        $this->SSN = $SSN;
    }

    public function setSecondaryInsurancePolicyCompanyID($SecondaryInsurancePolicyCompanyID)
    {
        $this->SecondaryInsurancePolicyCompanyID = $SecondaryInsurancePolicyCompanyID;
    }

    public function setSecondaryInsurancePolicyCompanyName($SecondaryInsurancePolicyCompanyName)
    {
        $this->SecondaryInsurancePolicyCompanyName = $SecondaryInsurancePolicyCompanyName;
    }

    public function setSecondaryInsurancePolicyCopay($SecondaryInsurancePolicyCopay)
    {
        $this->SecondaryInsurancePolicyCopay = $SecondaryInsurancePolicyCopay;
    }

    public function setSecondaryInsurancePolicyDeductible($SecondaryInsurancePolicyDeductible)
    {
        $this->SecondaryInsurancePolicyDeductible = $SecondaryInsurancePolicyDeductible;
    }

    public function setSecondaryInsurancePolicyEffectiveEndDate($SecondaryInsurancePolicyEffectiveEndDate)
    {
        $this->SecondaryInsurancePolicyEffectiveEndDate = $SecondaryInsurancePolicyEffectiveEndDate;
    }

    public function setSecondaryInsurancePolicyEffectiveStartDate($SecondaryInsurancePolicyEffectiveStartDate)
    {
        $this->SecondaryInsurancePolicyEffectiveStartDate = $SecondaryInsurancePolicyEffectiveStartDate;
    }

    public function setSecondaryInsurancePolicyGroupNumber($SecondaryInsurancePolicyGroupNumber)
    {
        $this->SecondaryInsurancePolicyGroupNumber = $SecondaryInsurancePolicyGroupNumber;
    }

    public function setSecondaryInsurancePolicyInsuredAddressLine1($SecondaryInsurancePolicyInsuredAddressLine1)
    {
        $this->SecondaryInsurancePolicyInsuredAddressLine1 = $SecondaryInsurancePolicyInsuredAddressLine1;
    }

    public function setSecondaryInsurancePolicyInsuredAddressLine2($SecondaryInsurancePolicyInsuredAddressLine2)
    {
        $this->SecondaryInsurancePolicyInsuredAddressLine2 = $SecondaryInsurancePolicyInsuredAddressLine2;
    }

    public function setSecondaryInsurancePolicyInsuredCity($SecondaryInsurancePolicyInsuredCity)
    {
        $this->SecondaryInsurancePolicyInsuredCity = $SecondaryInsurancePolicyInsuredCity;
    }

    public function setSecondaryInsurancePolicyInsuredCountry($SecondaryInsurancePolicyInsuredCountry)
    {
        $this->SecondaryInsurancePolicyInsuredCountry = $SecondaryInsurancePolicyInsuredCountry;
    }

    public function setSecondaryInsurancePolicyInsuredDateOfBirth($SecondaryInsurancePolicyInsuredDateOfBirth)
    {
        $this->SecondaryInsurancePolicyInsuredDateOfBirth = $SecondaryInsurancePolicyInsuredDateOfBirth;
    }

    public function setSecondaryInsurancePolicyInsuredFullName($SecondaryInsurancePolicyInsuredFullName)
    {
        $this->SecondaryInsurancePolicyInsuredFullName = $SecondaryInsurancePolicyInsuredFullName;
    }

    public function setSecondaryInsurancePolicyInsuredGender($SecondaryInsurancePolicyInsuredGender)
    {
        $this->SecondaryInsurancePolicyInsuredGender = $SecondaryInsurancePolicyInsuredGender;
    }

    public function setSecondaryInsurancePolicyInsuredIDNumber($SecondaryInsurancePolicyInsuredIDNumber)
    {
        $this->SecondaryInsurancePolicyInsuredIDNumber = $SecondaryInsurancePolicyInsuredIDNumber;
    }

    public function setSecondaryInsurancePolicyInsuredNotes($SecondaryInsurancePolicyInsuredNotes)
    {
        $this->SecondaryInsurancePolicyInsuredNotes = $SecondaryInsurancePolicyInsuredNotes;
    }

    public function setSecondaryInsurancePolicyInsuredSocialSecurityNumber($SecondaryInsurancePolicyInsuredSocialSecurityNumber)
    {
        $this->SecondaryInsurancePolicyInsuredSocialSecurityNumber = $SecondaryInsurancePolicyInsuredSocialSecurityNumber;
    }

    public function setSecondaryInsurancePolicyInsuredState($SecondaryInsurancePolicyInsuredState)
    {
        $this->SecondaryInsurancePolicyInsuredState = $SecondaryInsurancePolicyInsuredState;
    }

    public function setSecondaryInsurancePolicyInsuredZipCode($SecondaryInsurancePolicyInsuredZipCode)
    {
        $this->SecondaryInsurancePolicyInsuredZipCode = $SecondaryInsurancePolicyInsuredZipCode;
    }

    public function setSecondaryInsurancePolicyNumber($SecondaryInsurancePolicyNumber)
    {
        $this->SecondaryInsurancePolicyNumber = $SecondaryInsurancePolicyNumber;
    }

    public function setSecondaryInsurancePolicyPatientRelationshipToInsured($SecondaryInsurancePolicyPatientRelationshipToInsured)
    {
        $this->SecondaryInsurancePolicyPatientRelationshipToInsured = $SecondaryInsurancePolicyPatientRelationshipToInsured;
    }

    public function setSecondaryInsurancePolicyPlanAddressLine1($SecondaryInsurancePolicyPlanAddressLine1)
    {
        $this->SecondaryInsurancePolicyPlanAddressLine1 = $SecondaryInsurancePolicyPlanAddressLine1;
    }

    public function setSecondaryInsurancePolicyPlanAddressLine2($SecondaryInsurancePolicyPlanAddressLine2)
    {
        $this->SecondaryInsurancePolicyPlanAddressLine2 = $SecondaryInsurancePolicyPlanAddressLine2;
    }

    public function setSecondaryInsurancePolicyPlanAdjusterFullName($SecondaryInsurancePolicyPlanAdjusterFullName)
    {
        $this->SecondaryInsurancePolicyPlanAdjusterFullName = $SecondaryInsurancePolicyPlanAdjusterFullName;
    }

    public function setSecondaryInsurancePolicyPlanCity($SecondaryInsurancePolicyPlanCity)
    {
        $this->SecondaryInsurancePolicyPlanCity = $SecondaryInsurancePolicyPlanCity;
    }

    public function setSecondaryInsurancePolicyPlanCountry($SecondaryInsurancePolicyPlanCountry)
    {
        $this->SecondaryInsurancePolicyPlanCountry = $SecondaryInsurancePolicyPlanCountry;
    }

    public function setSecondaryInsurancePolicyPlanFaxNumber($SecondaryInsurancePolicyPlanFaxNumber)
    {
        $this->SecondaryInsurancePolicyPlanFaxNumber = $SecondaryInsurancePolicyPlanFaxNumber;
    }

    public function setSecondaryInsurancePolicyPlanFaxNumberExt($SecondaryInsurancePolicyPlanFaxNumberExt)
    {
        $this->SecondaryInsurancePolicyPlanFaxNumberExt = $SecondaryInsurancePolicyPlanFaxNumberExt;
    }

    public function setSecondaryInsurancePolicyPlanID($SecondaryInsurancePolicyPlanID)
    {
        $this->SecondaryInsurancePolicyPlanID = $SecondaryInsurancePolicyPlanID;
    }

    public function setSecondaryInsurancePolicyPlanName($SecondaryInsurancePolicyPlanName)
    {
        $this->SecondaryInsurancePolicyPlanName = $SecondaryInsurancePolicyPlanName;
    }

    public function setSecondaryInsurancePolicyPlanPhoneNumber($SecondaryInsurancePolicyPlanPhoneNumber)
    {
        $this->SecondaryInsurancePolicyPlanPhoneNumber = $SecondaryInsurancePolicyPlanPhoneNumber;
    }

    public function setSecondaryInsurancePolicyPlanPhoneNumberExt($SecondaryInsurancePolicyPlanPhoneNumberExt)
    {
        $this->SecondaryInsurancePolicyPlanPhoneNumberExt = $SecondaryInsurancePolicyPlanPhoneNumberExt;
    }

    public function setSecondaryInsurancePolicyPlanState($SecondaryInsurancePolicyPlanState)
    {
        $this->SecondaryInsurancePolicyPlanState = $SecondaryInsurancePolicyPlanState;
    }

    public function setSecondaryInsurancePolicyPlanZipCode($SecondaryInsurancePolicyPlanZipCode)
    {
        $this->SecondaryInsurancePolicyPlanZipCode = $SecondaryInsurancePolicyPlanZipCode;
    }

    public function setState($State)
    {
        $this->State = $State;
    }

    public function setStatementNote($StatementNote)
    {
        $this->StatementNote = $StatementNote;
    }

    public function setSuffix($Suffix)
    {
        $this->Suffix = $Suffix;
    }

    public function setTotalBalance($TotalBalance)
    {
        $this->TotalBalance = $TotalBalance;
    }

    public function setWorkPhone($WorkPhone)
    {
        $this->WorkPhone = $WorkPhone;
    }

    public function setWorkPhoneExt($WorkPhoneExt)
    {
        $this->WorkPhoneExt = $WorkPhoneExt;
    }

    public function setZipCode($ZipCode)
    {
        $this->ZipCode = $ZipCode;
    }

}
