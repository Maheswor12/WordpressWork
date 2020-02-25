<!-- 
    Note
contact form 7 plugin
date picker plugin
hidden plugin is mandatory
 -->

<div class="modal-body">
    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label for="full name">First Name*</label>
            [text* fullname class:form-control placeholder "Enter Full Name"]
        </div>
        <div class="col-md-6 mb-3">
            <label for="full name">Trip Date*</label>
            [date trip_date date-format:mm/dd/yy min-date:0 first-day:1]
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label for="no of people">No. of People*</label>
            [tel* numberpeople class:form-control placeholder "No. of People"]
        </div>
        <div class="col-md-6 mb-3">
            <label for="duration">Duration*</label>
            [select* duration class:form-control "In Days" "1" "2" "3" "4" "5" "6" "7" "8" "9" "10" ]
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label for="email">Email*</label>
            [email* email class:form-control placeholder "Enter Email"]
        </div>
        <div class="col-md-6 mb-3">
            <label for="email">Contact*</label>
            [tel* phone_no class:form-control placeholder "Enter Phone Number"]
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label for="country">Country*</label>
            [select* country class:form-control "Nepal" "Afghanistan" "Albania" "Algeria" "Andorra" "Angola" "Antigua and Barbuda" "Argentina" "Armenia" "Australia" "Austria" "Azerbaijan" "The Bahamas" "Bahrain" "Bangladesh" "Barbados" "Belarus" "Belgium" "Belize" "Benin" "Bhutan" "Bolivia" "Bosnia and Herzegovina" "Botswana" "Brazil" "Brunei" "Bulgaria" "Burkina Faso" "Burundi" "Cabo Verde" "Cambodia" "Cameroon" "Canada" "Central African Republic" "Chad" "Chile" "China" "Colombia" "Comoros" "Democratic Republic of the Congo" "Republic of the Congo" "Costa Rica" "Côte d’Ivoire" "Croatia" "Cuba" "Cyprus" "Czech Republic" "Denmark" "Djibouti" "Dominica" "Dominican Republic" "East Timor (Timor-Leste)" "Ecuador" "Egypt" "El Salvador" "Equatorial Guinea" "Eritrea" "Estonia" "Eswatini" "Ethiopia" "Fiji" "Finland" "France" "Gabon" "The Gambia" "Georgia" "Germany" "Ghana" "Greece" "Grenada" "Guatemala" "Guinea" "Guinea-Bissau" "Guyana" "Haiti" "Honduras" "Hungary" "Iceland" "India" "Indonesia" "Iran" "Iraq" "Ireland" "Israel" "Italy" "Jamaica" "Japan" "Jordan" "Kazakhstan" "Kenya" "Kiribati" "Korea, North" "Korea, South" "Kosovo" "Kuwait" "Kyrgyzstan" "Laos" "Latvia" "Lebanon" "Lesotho" "Liberia" "Libya" "Liechtenstein" "Lithuania" "Luxembourg" "Madagascar" "Malawi" "Malaysia" "Maldives" "Mali" "Malta" "Marshall Islands" "Mauritania" "Mauritius" "Mexico" "Micronesia, Federated States of Moldova" "Monaco" "Mongolia" "Montenegro" "Morocco" "Mozambique" "Myanmar (Burma)" "Namibia" "Nauru" "Netherlands" "New Zealand" "Nicaragua" "Niger" "Nigeria" "North Macedonia" "Norway" "Oman" "Pakistan" "Palau" "Panama" "Papua New Guinea" "Paraguay" "Peru" "Philippines" "Poland" "Portugal" "Qatar" "Romania" "Russia" "Rwanda" "Saint Kitts and Nevis" "Saint Lucia" "Saint Vincent and the Grenadines" "Samoa" "San Marino" "Sao Tome and Principe" "Saudi Arabia" "Senegal" "Serbia" "Seychelles" "Sierra Leone" "Singapore" "Slovakia" "Slovenia" "Solomon Islands" "Somalia" "South Africa" "Spain" "Sri Lanka" "Sudan" "Sudan, South" "Suriname" "Sweden" "Switzerland" "Syria" "Taiwan" "Tajikistan" "Tanzania" "Thailand" "Togo" "Tonga" "Trinidad and Tobago" "Tunisia" "Turkey" "Turkmenistan" "Tuvalu" "Uganda" "Ukraine" "United Arab Emirates" "United Kingdom" "United States" "Uruguay" "Uzbekistan" "Vanuatu" "Vatican City" "Venezuela" "Vietnam" "Yemen" "Zambia" "Zimbabwe"]
        </div>
        <div class="col-md-6 mb-3">
            <label for="gender">Gender*</label>
            [select* gender class:form-control "Choose Gender" "Male" "Female" "Other" ]
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-12">
            <label for="message">Message</label>
            [textarea* message class:form-control placeholder "Additional Message"]
        </div>
    </div>
</div>
<div class="modal-footer">
    [submit "Customize Trip"]
</div>