*** Settings ***
Library    Collections
Library    requests

*** Testcases ***
google
    [Tags]    not_test
    ${resp}=  Get    http://www.google.co.th    /
    Should Be Equal As Strings  ${resp.status_code}  500
google_2
    ${resp}=  Get    http://www.google.co.th    /
    Should Be Equal As Strings  ${resp.status_code}  200
