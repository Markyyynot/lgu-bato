<?php 
$currentPage = 'executive-order.php'; 
include 'includes/header.php'; 
?>

<style>
/* =======================
   Page Colors and Typography
======================= */
body {
    background-color: #f5f0e6;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: #1b2a4e;
}

.mayor-title {
    font-size: 42px;
    font-weight: 800;
    letter-spacing: 1.5px;
    text-transform: uppercase;
}

/* =======================
   Title + Search Bar
======================= */
.title-search-container {
    max-width: 1200px;
    margin: 30px auto 20px;
    padding: 0 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 15px;
}

#searchInput {
    padding: 10px 14px;
    border: 2px solid #1b2a4e;
    border-radius: 8px;
    font-size: 16px;
    width: 320px;
    max-width: 100%;
    outline: none;
}

#searchInput:focus {
    border-color: #0d1b34;
    box-shadow: 0 0 5px rgba(27,42,78,0.3);
}

/* =======================
   Content Section
======================= */
.content-section {
    max-width: 1200px;
    margin: 0 auto 60px;
    padding: 0 20px;
    font-size: 18px;
    line-height: 1.8;
    text-align: center;
}

/* =======================
   Table Styling
======================= */
.table-wrapper {
    overflow-x: auto;
    margin-top: 20px;
}

table {
    width: 100%;
    border-collapse: collapse;
    min-width: 600px;
    background-color: #fff;
    border-radius: 12px;
    overflow: hidden;
}

table th, table td {
    border: 1px solid #1b2a4e;
    padding: 12px 10px;
    text-align: left;
    font-size: 16px;
}

table th {
    background-color: #1b2a4e;
    color: #fff;
}

table tr:nth-child(even) {
    background-color: #e6e0d6;
}

table a {
    color: #1b2a4e;
    text-decoration: none;
}

table a:hover {
    text-decoration: underline;
}

/* =======================
   BACK TO TOP BUTTON
======================= */
#backToTop {
    position: fixed;
    top: -70px; /* hidden above screen */
    right: 20px;
    z-index: 999;
    background-color: #1b2a4e;
    color: #fff;
    border: none;
    padding: 10px 16px;
    border-radius: 30px;
    font-size: 14px;
    cursor: pointer;
    box-shadow: 0 4px 12px rgba(0,0,0,0.25);
    transition: all 0.4s ease;
    opacity: 0;
}

/* SHOW ANIMATION */
#backToTop.show {
    top: 20px;
    opacity: 1;
}

/* Hover animation */
#backToTop:hover {
    background-color: #ffffff;
    color: #1b2a4e;
    transform: translateY(-3px) scale(1.05);
}

/* =======================
   Responsive
======================= */
@media (max-width: 768px) {
    .mayor-title { font-size: 32px; }
    .content-section { font-size: 16px; }

    .title-search-container {
        flex-direction: column;
        align-items: flex-start;
    }

    #searchInput {
        width: 100%;
    }

    table th, table td {
        font-size: 14px;
        padding: 10px 8px;
    }
}

@media (max-width: 480px) {
    .mayor-title { font-size: 28px; }
    .content-section { font-size: 14px; padding: 0 10px; }

    table th, table td {
        font-size: 12px;
        padding: 8px 6px;
    }
}
</style>

<section>

    <!-- TITLE + SEARCH -->
    <div class="title-search-container">
        <h2 class="mayor-title">
            <i class="fa-solid fa-file-circle-check"></i> Executive Orders
        </h2>

        <input type="text" id="searchInput"
            placeholder="Search EO number, title, or date...">
    </div>

    <div class="content-section">
        <p>
            List of recent executive orders issued by the municipality. Each EO
            provides guidelines and instructions for public administration,
            health, safety, and local development.
        </p>

        <div class="table-wrapper">
            <table>
                <thead>
                    <tr style="text-transform: uppercase;">
                        <th>EO Number</th>
                        <th style="text-align:center;">Title</th>
                        <th>Date Issued</th>
                        <th>Details</th>
                    </tr>
                </thead>

                <tbody id="eoTable">
                    <tr>
                        <td>EO No. 0012-2026</td>
                        <td>REORGANIZATION OF THE MUNICIPAL SOLID WASTE MANAGEMENT BOARD (MSWMB)</td>
                        <td>Feb 19, 2026</td>
                        <td><a href="assets/eo/2026/REORGANIZATIONOFTHEMUNICIPALSOLIDWASTEMANAGEMENTBOARD.docx">DOWNLOAD</a></td>
                    </tr>

                    <tr>
                        <td>EO No. 0013-2026</td>
                        <td>REORGANIZING THE MUNICIPAL EPIDEMIOLOGY AND SURVEILLANCE UNIT</td>
                        <td>Feb 16, 2026</td>
                        <td><a href="assets/eo/2026/REORGANIZINGTHEMUNICIPALEPIDEMIOLOGYANDSURVEILLANCEUNIT.docx">DOWNLOAD</a></td>
                    </tr>

                    <tr>
                        <td>EO No. 0011-2026</td>
                        <td>RECONSTITUTING THE MUNICIPAL PROJECT MONITORING COMMITTEE</td>
                        <td>Feb 16, 2026</td>
                        <td><a href="assets/eo/2026/RECONSTITUTINGTHEMUNICIPALPROJECTMONITORINGCOMMITTEE.docx">DOWNLOAD</a></td>
                    </tr>

                    <tr>
                        <td>EO No. 0010-2026</td>
                        <td>CREATING THE PARK AND GREEN SPACE MANAGEMENT COMMITTEE</td>
                        <td>Feb 13, 2026</td>
                        <td><a href="assets/eo/2026/CREATINGTHEPARKANDGREENSPACEMANAGEMENTCOMMITTEE.docx">DOWNLOAD</a></td>
                    </tr>

                    <tr>
                        <td>EO No. 0009-2026</td>
                        <td>AUTHORIZING THE CONDITIONAL RELEASE OF BUSINESS PERMITS</td>
                        <td>Feb 11, 2026</td>
                        <td><a href="assets/eo/2026/AUTHORIZINGTHECONDITIONALRELEASEOFBUSINESSPERMITS.docx">DOWNLOAD</a></td>
                    </tr>

                    <tr>
                        <td>EO No. 0008-2026</td>
                        <td>CREATING THE DENGUE TASK FORCE AND ESTABLISHING GUIDELINES FOR DENGUE PREVENTION</td>
                        <td>Feb 10, 2026</td>
                        <td><a href="assets/eo/2026/CREATINGTHEDENGUETASKFORCEANDESTABLISHINGGUIDELINESFORDENGUEPREVENTION.docx">DOWNLOAD</a></td>
                    </tr>

                    <tr>
                        <td>EO No. 0007-2026</td>
                        <td>SUSPENSION OF CLASSES</td>
                        <td>Feb 10, 2026</td>
                        <td><a href="assets/eo/2026/SUSPENSIONOFCLASSES.docx">DOWNLOAD</a></td>
                    </tr>

                    <tr>
                        <td>EO No. 0006-2026</td>
                        <td>REORGANIZING DRINKING WATER QUALITY</td>
                        <td>Feb 9, 2026</td>
                        <td><a href="assets/eo/2026/REORGANIZINGDRINKINGWATERQUALITY.docx">DOWNLOAD</a></td>
                    </tr>

                    <tr>
                        <td>EO No. 0005-2026</td>
                        <td>SUSPENSION OF CLASSES DUE TO TYPHOON BASYANG</td>
                        <td>Feb 5, 2026</td>
                        <td><a href="assets/eo/2026/SUSPENSIONOFCLASSESDUETOTYPHOONBASYANG.docx">DOWNLOAD</a></td>
                    </tr>

                    <tr>
                        <td>EO No. 0004-2026</td>
                        <td>REORGANIZING GRIEVANCE COMMITTEE</td>
                        <td>Jan 29, 2026</td>
                        <td><a href="assets/eo/2026/REORGANIZINGGRIEVANCECOMMITTEE.docx">DOWNLOAD</a></td>
                    </tr>

                    <tr>
                        <td>EO No. 0003-2026</td>
                        <td>SUSPENSION OF CLASSES AND WORK AFTER FIESTA</td>
                        <td>Jan 25, 2026</td>
                        <td><a href="assets/eo/2026/SUSPENSIONOFCLASSESANDWORKAFTERFIESTA.docx">DOWNLOAD</a></td>
                    </tr>

                    <tr>
                        <td>EO No. 0002-2026</td>
                        <td>MUNICIPAL AWARDS COMMITTEE</td>
                        <td>Jan 19, 2026</td>
                        <td><a href="assets/eo/2026/MUNICIPALAWARDSCOMMITTEE.docx">DOWNLOAD</a></td>
                    </tr>
    
                    <tr>
                        <td>EO No. 0001-2026</td>
                        <td>OPENING SALVO</td>
                        <td>Jan 15, 2026</td>
                        <td><a href="assets/eo/2026/OPENINGSALVO.docx">DOWNLOAD</a></td>
                    </tr>

                                        <tr>
                        <td>EO No. 0041-2025</td>
                        <td>PLEB</td>
                        <td>Dec 9, 2025</td>
                        <td><a href="assets/eo/2025/PLEB.docx">DOWNLOAD</a></td>
                    </tr>

                    <tr>
                        <td>EO No. 0040-2025</td>
                        <td>MUNICIPAL AWARDS COMMITTEE</td>
                        <td>Dec 6, 2025</td>
                        <td><a href="assets/eo/2025/MUNICIPALAWARDSCOMMITTEE.docx">DOWNLOAD</a></td>
                    </tr>

                    <tr>
                        <td>EO No. 0040A-2025</td>
                        <td>REORGANIZING LCAC</td>
                        <td>Dec 6, 2025</td>
                        <td><a href="assets/eo/2025/REORGANIZINGLCAC.docx">DOWNLOAD</a></td>
                    </tr>

                    <tr>
                        <td>EO No. 0034-2025</td>
                        <td>TD WILMA</td>
                        <td>Dec 4, 2025</td>
                        <td><a href="assets/eo/2025/TDWILMA.docx">DOWNLOAD</a></td>
                    </tr>

                    <tr>
                        <td>EO No. 0033-2025</td>
                        <td>TD VERBENA</td>
                        <td>Nov 24, 2025</td>
                        <td><a href="assets/eo/2025/VERBENA.docx">DOWNLOAD</a></td>
                    </tr>

                    <tr>
                        <td>EO No. 0031-2025</td>
                        <td>ORGANIZATION OF THE MUNCIIPAL HEALTH EMERGENCY RESPONSE TEAM</td>
                        <td>Nov 24, 2025</td>
                        <td><a href="assets/eo/2025/ORGANIZATIONOFTHEMUNCIIPALHEALTHEMERGENCYRESPONSETEAM.docx">DOWNLOAD</a></td>
                    </tr>

                    <tr>
                        <td>EO No. 0030S-2025</td>
                        <td>SPECIAL DRUG EDUCATION CENTER AND TEAM</td>
                        <td>Nov 28, 2025</td>
                        <td><a href="assets/eo/2025/SPECIALDRUGEDUCATIONCENTERANDTEAM.docx">DOWNLOAD</a></td>
                    </tr>

                    <tr>
                        <td>EO No. 0030-2025</td>
                        <td>CREATING THE MUNICIPAL POVERTY REDUCTION ACTION COMMITTEE (IMPRAC) OF BATO, LEYTE FOR THE FORMULATION AND IMPLEMENTATION OF THE MUNICIPAL</td>
                        <td>Nov 12, 2025</td>
                        <td><a href="assets/eo/2025/CREATINGTHEMUNICIPALPOVERTYREDUCTIONACTIONCOMMITTEE.docx">DOWNLOAD</a></td>
                    </tr>

                    <tr>
                        <td>EO No. 0029-2025</td>
                        <td>ESTABLISHING THE CIVIL SOCIETY ORGANIZATION DESK AND DESIGNATING CSO DESK OFFICER</td>
                        <td>Nov 6, 2025</td>
                        <td><a href="assets/eo/2025/ESTABLISHINGTHECIVILSOCIETYORGANIZATIONDESK.docx">DOWNLOAD</a></td>
                    </tr>

                    <tr>
                        <td>EO No. 0026-2025</td>
                        <td>INSTITUTIONALIZING A DRUG FREE WORKPLACE IN THE LOCAL GOVERNMENT UNIT OF BATO, LEYTE</td>
                        <td>Dec 4, 2025</td>
                        <td><a href="assets/eo/2025/INSTITUTIONALIZINGADRUGFREEWORKPLACE.docx">DOWNLOAD</a></td>
                    </tr>

                    <tr>
                        <td>EO No. 0024-2025</td>
                        <td>TEACHER'S DAY</td>
                        <td>Dec 4, 2025</td>
                        <td><a href="assets/eo/2025/TEACHERSDAY.docx">DOWNLOAD</a></td>
                    </tr>

                    <tr>
                        <td>EO No. 0023-2025</td>
                        <td>MUNICIPAL HEALTH BOARD</td>
                        <td>Oct 3, 2025</td>
                        <td><a href="assets/eo/2025/MUNICIPALHEALTHBOARD.docx">DOWNLOAD</a></td>
                    </tr>

                    <tr>
                        <td>EO No. 0022A-2025</td>
                        <td>SPECIAL DRUG EDUCATION CENTER AND TEAM</td>
                        <td>Oct 3, 2025</td>
                        <td><a href="assets/eo/2025/SPECIALDRUGEDUCATIONCENTERANDTEAM1.docx">DOWNLOAD</a></td>
                    </tr>

                                        <tr>
                        <td>EO No. 0022-2025</td>
                        <td>MUNICIPAL PEACE AND ORDER COUNCIL</td>
                        <td>Oct 3, 2025</td>
                        <td><a href="assets/eo/2025/MUNICIPALPEACEANDORDERCOUNCIL.docx">DOWNLOAD</a></td>
                    </tr>

                    <tr>
                        <td>EO No. 0021-2025</td>
                        <td>REORGANIZING THE PUBLIC FINANCIAL MANAGEMENT TEAM</td>
                        <td>Oct 3, 2025</td>
                        <td><a href="assets/eo/2025/REORGANIZINGTHEPUBLICFINANCIALMANAGEMENTTEAM.docx">DOWNLOAD</a></td>
                    </tr>

                    <tr>
                        <td>EO No. 0020B-2025</td>
                        <td>DECLARING THE DEACTIVATION OF THE MUNICIPAL EMERGENCY OPERATIONS CENTER (EOC) FOLLOWING THE PASSAGE OF SEVERE TROPICAL STORM OPONG</td>
                        <td>Oct 3, 2025</td>
                        <td><a href="assets/eo/2025/DECLARINGTHEDEACTIVATIONOFMUNICIPALEMERGENCYOPERATIONSCENTER.docx">DOWNLOAD</a></td>
                    </tr>

                    <tr>
                        <td>EO No. 0020A-2025</td>
                        <td>EXTENDING THE ACTIVATION OF THE OPERATION CENTER INTO EMERGENCY OPERATION CENTER IN THE MUNICIPALITY OF BATO, LEYTE UNTIL SEPT. 26, 2025</td>
                        <td>Oct3, 2025</td>
                        <td><a href="assets/eo/2025/EXTENDINGTHEACTIVATIONOFOPERATIONCENTERINTOEMERGENCYOPERATIONCENTER.docx">DOWNLOAD</a></td>
                    </tr>

                    <tr>
                        <td>EO No. 0020-2025</td>
                        <td>SUSPENSION OF WORK AND CLASSES</td>
                        <td>Sept 25, 2025</td>
                        <td><a href="assets/eo/2025/SUSPENSIONOFWORKANDCLASSES1.docx">DOWNLOAD</a></td>
                    </tr>

                    <tr>
                        <td>EO No. 0019-2025</td>
                        <td>LOCAL SCHOOL BOARD</td>
                        <td>Aug 6, 2025</td>
                        <td><a href="assets/eo/2025/LOCALSCHOOLBOARD.docx">DOWNLOAD</a></td>
                    </tr>

                    <tr>
                        <td>EO No. 0018-2025</td>
                        <td>DESIGNATING PWD FOCAL PERSON</td>
                        <td>Aug 6, 2025</td>
                        <td><a href="assets/eo/2025/DESIGNATINGPWDFOCALPERSON.docx">DOWNLOAD</a></td>
                    </tr>

                    <tr>
                        <td>EO No. 0017-2025</td>
                        <td>DESIGNATING ARSENIO G. GERTOS JR. AS THE MUNICIPAL STATISTICIAN</td>
                        <td>Aug 6, 2025</td>
                        <td><a href="assets/eo/2025/DESIGNATINGARSENIOGGERTOSJRASMUNICIPALSTATISTICIAN.docx">DOWNLOAD</a></td>
                    </tr>

                    <tr>
                        <td>EO No. 0016-2025</td>
                        <td>DESIGNATING RIZALINA M. BUZON AS DATA PROTECTION OFFICER</td>
                        <td>Aug 6, 2025</td>
                        <td><a href="assets/eo/2025/DESIGNATINGRIZALINAMBUZONASDATAPROTECTIONOFFICER.docx">DOWNLOAD</a></td>
                    </tr>

                    <tr>
                        <td>EO No. 0015-2025</td>
                        <td>LYDC</td>
                        <td>Aug 6, 2025</td>
                        <td><a href="assets/eo/2025/LOCALYOUTHDEVELOPMENTCOUNCIL.docx">DOWNLOAD</a></td>
                    </tr>

                    <tr>
                        <td>EO No. 0014-2025</td>
                        <td>REORGANIZING THE MUNICIPAL DRINKING WATER QUALITY MONITORING COMMITTEE</td>
                        <td>Aug 5, 2025</td>
                        <td><a href="assets/eo/2025/REORGANIZINGTHEMUNICIPALDRINKINGWATERQUALITYMONITORINGCOMMITTEE.docx">DOWNLOAD</a></td>
                    </tr>

                    <tr>
                        <td>EO No. 0013-2025</td>
                        <td>LOCAL WATER QUALITY MONITORING UNIT</td>
                        <td>Aug 5, 2025</td>
                        <td><a href="assets/eo/2025/LOCALWATERQUALITYMONITORINGUNIT.docx">DOWNLOAD</a></td>
                    </tr>

                    <tr>
                        <td>EO No. 0012-2025</td>
                        <td>LOCAL WETLANDS MANAGEMENT COUNCIL</td>
                        <td>Aug 5, 2025</td>
                        <td><a href="assets/eo/2025/LOCALWETLANDSMANAGEMENTCOUNCIL.docx">DOWNLOAD</a></td>
                    </tr>

                    <tr>
                        <td>EO No. 0011-2025</td>
                        <td>WILDLIFE MONITORING AND ENFORCEMENT TASK FORCE</td>
                        <td>Aug 5, 2025</td>
                        <td><a href="assets/eo/2025/WILDLIFEMONITORINGANDENFORCEMENTTASKFORCE.docx">DOWNLOAD</a></td>
                    </tr>

                    <tr>
                        <td>EO No. 0010-2025</td>
                        <td>SOLID WASTE MANAGEMENT BOARD</td>
                        <td>Aug 5, 2025</td>
                        <td><a href="assets/eo/2025/SOLIDWASTEMANAGEMENTBOARD.docx">DOWNLOAD</a></td>
                    </tr>

                    <tr>
                        <td>EO No. 0009-2025</td>
                        <td>CREATING THE MUNICIPAL LITERACY COUNCIL</td>
                        <td>July 25, 2025</td>
                        <td><a href="assets/eo/2025/CREATINGTHEMUNICIPALLITERACYCOUNCIL.docx">DOWNLOAD</a></td>
                    </tr>

                    <tr>
                        <td>EO No. 0008-2025</td>
                        <td>CLASS SUSPENSION 17 JULY 2025 HEAVY RAINS</td>
                        <td>July 17, 2025</td>
                        <td><a href="assets/eo/2025/CLASS_SUSPENSION_17_JULY_2025_HEAVY_RAINS.docx">DOWNLOAD</a></td>
                    </tr>

                    <tr>
                        <td>EO No. 0007-2025</td>
                        <td>DECLARING THE SUSPENSION OF OFFICE WORK AND CLASSES - OPENING SALVO</td>
                        <td>May 2, 2025</td>
                        <td><a href="assets/eo/2025/DECLARINGTHESUSPENSIONOFOFFICEWORKANDCLASSESOPENINGSALVO.docx">DOWNLOAD</a></td>
                    </tr>

                    <tr>
                        <td>EO No. 0006-2025</td>
                        <td>REORGANIZATION OF THE HRMPSB</td>
                        <td>April 2, 2025</td>
                        <td><a href="assets/eo/2025/REORGANIZATIONOFHRMPSB.docx">DOWNLOAD</a></td>
                    </tr>

                    <tr>
                        <td>EO No. 0005-2025</td>
                        <td>RECONSTITUTING BAC</td>
                        <td>July 1, 2025</td>
                        <td><a href="assets/eo/2025/RECONSTITUTINGBAC.docx">DOWNLOAD</a></td>
                    </tr>

                    <tr>
                        <td>EO No. 0004-2025</td>
                        <td>INVENTORY COMMITTEE</td>
                        <td>July 1, 2025</td>
                        <td><a href="assets/eo/2025/INVENTORYCOMMITTEE.docx">DOWNLOAD</a></td>
                    </tr>

                    <tr>
                        <td>EO No. 0003-2025</td>
                        <td>AN ORDER RECONSTITUTING THE COMPOSITION OF MUNICIPAL NUTRITION COMMITTEE</td>
                        <td>July 1, 2025</td>
                        <td><a href="assets/eo/2025/ANORDERRECONSTITUTINGTHECOMPOSITIONOFMUNICIPALNUTRITIONCOMMITTEE.docx">DOWNLOAD</a></td>
                    </tr>

                    <tr>
                        <td>EO No. 0002-2025</td>
                        <td>REORGANIZATION OF THE MUNICIPAL DISASTER RISK REDUCTION AND MANAGEMENT COUNCIL</td>
                        <td>Oct 3, 2025</td>
                        <td><a href="assets/eo/2025/REORGANIZATIONOFMUNICIPALDISASTERSEVERITYANDMANAGEMENTCOUNCIL.docx">DOWNLOAD</a></td>
                    </tr>

                    <tr>
                        <td>EO No. 0001-2025</td>
                        <td>LOCAL YOUTH DEVELOPMENT OFFICER</td>
                        <td>July 1, 2025</td>
                        <td><a href="assets/eo/2025/LOCALYOUTHDEVELOPMENTOFFICER.docx">DOWNLOAD</a></td>
                    </tr>

                    <tr>
                        <td>EO No. 0007S-2025</td>
                        <td>DOH-HRH SAFETY AND SECURITY COMMITTEE</td>
                        <td>May 2, 2025</td>
                        <td><a href="assets/eo/2025/DOH-HRHSAFETYANDSECURITYCOMMITTEE.docx">DOWNLOAD</a></td>
                    </tr>

                    <tr>
                        <td>EO No. 0006S-2025</td>
                        <td>LOCAL GOVERNANCE TRANSITION TEAM</td>
                        <td>April 2, 2025</td>
                        <td><a href="assets/eo/2025/LOCALGOVERNANCETRANSITIONTEAM.docx">DOWNLOAD</a></td>
                    </tr>

                    <tr>
                        <td>EO No. 0005S-2025</td>
                        <td>PUROKALUSUGAN HEALTH TEAM</td>
                        <td>March 19, 2025</td>
                        <td><a href="assets/eo/2025/LOCALGOVERNANCEHEALTHTEAM.docx">DOWNLOAD</a></td>
                    </tr>

                    <tr>
                        <td>EO No. 0004S-2025</td>
                        <td>MUNICIPAL AWARDS COMMITTEE</td>
                        <td>Feb 12, 2025</td>
                        <td><a href="assets/eo/2025/MUNICIPALAWARDSCOMMITTEE1.docx">DOWNLOAD</a></td>
                    </tr>

                    <tr>
                        <td>EO No. 0003S-2025</td>
                        <td>MUNICIPAL IMPLEMENTING TEAM FOR THE RESPONSIBLE PARENTHOOD AND REPRODUCTIVE HEALTH</td>
                        <td>Feb 12, 2025</td>
                        <td><a href="assets/eo/2025/MUNICIPALIMPLEMENTINGTEAMFORRESPONSIBLEPARENTHOODANDREPRODUCTIVEHEALTH.docx">DOWNLOAD</a></td>
                    </tr>

                    <tr>
                        <td>EO No. 0002S-2025</td>
                        <td> SUSPENSION OF WORK AND CLASSES</td>
                        <td>Jan 23, 2025</td>
                        <td><a href="assets/eo/2025/SUSPENSIONOFWORKANDCLASSES.docx">DOWNLOAD</a></td>
                    </tr>

                    <tr>
                        <td>EO No. 0001S-2025</td>
                        <td>REORGANIZATION OF THE MUNICIPAL HIV AIDS COUNCIL</td>
                        <td>Jan 13, 2025</td>
                        <td><a href="assets/eo/2025/REORGANIZATIONOFMUNICIPALHIVAIDSCOUNCIL.docx">DOWNLOAD</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<button id="backToTop" title="Go to top">↑ Top</button>
<!-- SEARCH SCRIPT -->
<script>
document.getElementById("searchInput").addEventListener("keyup", function () {
    let filter = this.value.toLowerCase();  
    let rows = document.querySelectorAll("#eoTable tr");

    rows.forEach(function(row) {
        let text = row.textContent.toLowerCase();
        row.style.display = text.includes(filter) ? "" : "none";
    });
});

const backToTopBtn = document.getElementById("backToTop");

// Show button when scrolling down
window.addEventListener("scroll", function () {
    if (window.scrollY > 250) {
        backToTopBtn.classList.add("show");
    } else {
        backToTopBtn.classList.remove("show");
    }
});

// Smooth scroll to top
backToTopBtn.addEventListener("click", function () {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
});
</script>

<?php include 'includes/footer.php'; ?>