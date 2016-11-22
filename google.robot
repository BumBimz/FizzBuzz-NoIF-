*** Settings ***
Library    Collections
Library    requests

*** Testcases ***

google_2
    ${resp}=  Get    http://www.google.co.th    /
    Should Be Equal As Strings  ${resp.status_code}  200
