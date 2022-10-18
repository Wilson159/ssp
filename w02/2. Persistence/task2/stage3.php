<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration: Stage 3</title>
</head>

<body>
    <form method="post" action="stage4.php">
        <fieldset>
            <legend>Registration Wizard</legend>
            <!-- Full Name -->
            <div>
                <input type="hidden" value="<?php echo $_POST['full_name'] ?>" name="full_name">
            </div>
            <!-- Address -->
            <div>
                <input type="hidden" value="<?php echo $_POST['address'] ?>" name="address">
            </div>
            <!-- Date of Birth -->
            <div>
                <input type="hidden" value="<?php echo $_POST['date_of_birth'] ?>" name="date_of_birth">
            </div>
            <!-- Username -->
            <div>
                <input type="hidden" value="<?php echo $_POST['username'] ?>" name="username">
            </div>
            <!-- Password -->
            <div>
                <input type="hidden" value="<?php echo $_POST['password'] ?>" name="password">
            </div>
            <!-- Mother's Maiden Name -->
            <div>
                <input type="hidden" value="<?php echo $_POST['maiden_name'] ?>" name="maiden_name">
            </div>
            <!-- Terms of Service -->
            <div>
                <p>
                    TERMS AND CONDITIONS <br>
                    Last updated October 18, 2022 <br>
                    <br>
                    TABLE OF CONTENTS <br>
                    1. AGREEMENT TO TERMS <br>
                    2. INTELLECTUAL PROPERTY RIGHTS <br>
                    3. USER REPRESENTATIONS <br>
                    4. USER REGISTRATION <br>
                    5. PROHIBITED ACTIVITIES <br>
                    6. USER GENERATED CONTRIBUTIONS <br>
                    7. CONTRIBUTION LICENSE <br>
                    8. SOCIAL MEDIA <br>
                    9. SUBMISSIONS <br>
                    10. THIRD-PARTY WEBSITE AND CONTENT <br>
                    11. SITE MANAGEMENT <br>
                    12. COPYRIGHT INFRINGEMENTS <br>
                    13. TERM AND TERMINATION <br>
                    14. MODIFICATIONS AND INTERRUPTIONS <br>
                    15. GOVERNING LAW <br>
                    16. DISPUTE RESOLUTION <br>
                    17. CORRECTIONS <br>
                    18. DISCLAIMER <br>
                    19. LIMITATIONS OF LIABILITY <br>
                    20. INDEMNIFICATION <br>
                    21. USER DATA <br>
                    22. ELECTRONIC COMMUNICATIONS, TRANSACTIONS, AND SIGNATURES <br>
                    23. CALIFORNIA USERS AND RESIDENTS <br>
                    24. MISCELLANEOUS <br>
                    25. CONTACT US <br>
                    <br>
                    <br>
                    1. AGREEMENT TO TERMS <br>
                    These Terms of Use constitute a legally binding agreement made between you, whether personally or on behalf of an entity ("you") and My Company LLC ("Company," "we," "us," or "our"),
                    concerning your access to and use of the https://mvwmysite.com website as well as any other media form, media channel, mobile website or mobile application related, linked, or othemise
                    connected thereto (collectively, the "Site"). We are registered in the United Kingdom and have our registered office at
                    You agree that by accessing the Site, you
                    have read, understood, and agreed to be bound by all of these Terms of Use. IF YOU DO NOT AGREE WITH ALL OF THESE TERMS OF USE, THEN YOU ARE EXPRESSLY
                    PROHIBITED FROM USING THE SITE AND YOU MUST DISCONTINUE USE IMMEDIATELY.
                    Supplemental terms and conditions or documents that may be posted on the Site from time to time are hereby expressly incorporated herein by reference. We reserve the right, in our sole
                    discretion, to make changes or modifications to these Terms of Use from time to time. We will alert you about any changes by updating the "Last updated" date of these Terms of IJse, and
                    you waive any right to receive specific notice of each such change. Please ensure that you check the applicable Terms every time you use our Site so that you understand which Terms
                    apply. You will be subject to, and will be deemed to have been made aware of and to have accepted, the changes in any revised Terms of Use by your continued use of the Site after the
                    date such revised Terms of IJse are posted.
                    The information provided on the Site is not intended for distribution to or use by any person or entity in any jurisdiction or country where such distribution or use would be contrary to law or
                    regulation or which would subject us to any registration requirement within such jurisdiction or country. Accordingly, those persons who choose to access the Site from other locations do so
                    on their own initiative and are solely responsible for compliance with local laws, if and to the extent local laws are applicable.
                    The Site is not tailored to comply with industry-specific regulations (Health Insurance Portability and Accountability Act (HIPAA), Federal Information Security Management Act (FISMA),
                    etc.), so if your interactions would be subjected to such laws, you may not use this Site. You may not use the Site in a way that would violate the Gramm-Leach-Bliley Act (GLBA).
                    The Site is intended for users who are at least 13 years of age. All users who are minors in the jurisdiction in which they reside (generally under the age of 18) must have the permission of,
                    and be directly supervised by, their parent or guardian to use the Site. If you are a minor, you must have your parent or guardian read and agree to these Terms of Use prior to you using the
                    Site.
                    <br>
                    <br>
                    2. INTELLECTUAL PROPERTY RIGHTS <br>
                    Unless othemise indicated, the Site is our proprietary propeny and all source code, databases, functionality, software, website designs, audio, video, text, photographs, and graphics on the
                    Site (collectively, the "Content") and the trademarks, service marks, and logos contained therein (the "Marks") are owned or controlled by us or licensed to us, and are protected by copyright
                    and trademark laws and various other intellectual property rights and unfair competition laws of the United States, international copyright laws, and international conventions. The Content
                    and the Marks are provided on the Site "AS IS" for your information and personal use only. Except as expressly provided in these Terms of Use, no part of the Site and no Content or Marks
                    may be copied, reproduced, aggregated, republished, uploaded, posted, publicly displayed, encoded, translated, transmitted, distributed, sold, licensed, or othemise exploited for any
                    commercial purpose whatsoever, without our express prior written permission.
                    Provided that you are eligible to use the Site, you are granted a limited license to access and use the Site and to download or print a copy of any portion of the Content to which you have
                    properly gained access solely for your personal, non-commercial use. We reserve all rights not expressly granted to you in and to the Site, the Content and the Marks.
                    <br>
                    <br>
                    3. USER REPRESENTATIONS <br>
                    By using the Site, you represent and warrant that: (1) all registration information you submit will be true, accurate, current, and complete; (2) you will maintain the accuracy of such
                    information and promptly update such registration information as necessary; (3) you have the legal capacity and you agree to comply with these Terms of Use; (4) you are not under the age
                    of 13; (5) you are not a minor in the jurisdiction in which you reside, or if a minor, you have received parental permission to use the Site; (6) you will not access the Site through automated or
                    non-human means, whether through a bot, script, or othewise; (7) you will not use the Site for any illegal or unauthorized purpose; and (8) your use of the Site will not violate any applicable
                    law or regulation.
                    If you provide any information that is untrue, inaccurate, not current, or incomplete, we have the right to suspend or terminate your account and refuse any and all current or future use of the
                    Site (or any portion thereof).
                    <br>
                    <br>
                    4. USER REGISTRATION <br>
                    You may be required to register with the Site. You agree to keep your password confidential and will be responsible for all use of your account and password. We reserve the right to
                    remove, reclaim, or change a username you select if we determine, in our sole discretion, that such username is inappropriate, obscene, or othemise objectionable.
                    <br>
                    <br>
                    5. PROHIBITED ACTIVITIES <br>
                    You may not access or use the Site for any purpose other than that for which we make the Site available. The Site may not be used in connection with any commercial endeavors except
                    those that are specifically endorsed or approved by us.
                    <br>
                    <br>
                    As a user of the Site, you agree not to: <br>
                    • Systematically retrieve data or other content from the Site to create or compile, directly or indirectly, a collection, compilation, database, or directory without written permission from us. <br>
                    • Trick, defraud, or mislead us and other users, especially in any attempt to learn sensitive account information such as user passwords. <br>
                    • Circumvent, disable, or othemise interfere with security-related features of the Site, including features that prevent or restrict the use or copying of any Content or enforce limitations
                    on the use of the Site and/or the Content contained therein. <br>
                    • Disparage, tarnish, or otherwise harm, in our opinion, us and/or the Site. <br>
                    • Use any information obtained from the Site in order to harass, abuse, or harm another person. <br>
                    • Make improper use of our support services or submit false reports of abuse or misconduct. <br>
                    • Use the Site in a manner inconsistent with any applicable laws or regulations. <br>
                    • Engage in unauthorized framing of or linking to the Site. <br>
                    • Upload or transmit (or attempt to upload or to transmit) viruses, Trojan horses, or other material, including excessive use of capital letters and spamming (continuous posting of
                    repetitive text), that interferes with any party's uninterrupted use and enjoyment of the Site or modifies, impairs, disrupts, alters, or interferes with the use, features, functions,
                    operation, or maintenance of the Site. <br>
                    • Engage in any automated use of the system, such as using scripts to send comments or messages, or using any data mining, robots, or similar data gathering and extraction tools. <br>
                    • Delete the copyright or other proprietary rights notice from any Content. <br>
                    • Attempt to impersonate another user or person or use the username of another user. <br>
                    • Upload or transmit (or attempt to upload or to transmit) any material that acts as a passive or active information collection or transmission mechanism, including without limitation,
                    clear graphics interchange formats ("gifs"), 1 xl pixels, web bugs, cookies, or other similar devices (sometimes referred to as "spyware" or "passive collection mechanisms" or "pcms"). <br>
                    • Interfere with, disrupt, or create an undue burden on the Site or the networks or services connected to the Site. <br>
                    • Harass, annoy, intimidate, or threaten any of our employees or agents engaged in providing any portion of the Site to you. <br>
                    • Attempt to bypass any measures of the Site designed to prevent or restrict access to the Site, or any portion of the Site. <br>
                    • Copy or adapt the Site's somvare, including but not limited to Flash, PHP, HTML, JavaScript, or other code. <br>
                    • Except as permitted by applicable law, decipher, decompile, disassemble, or reverse engineer any of the software comprising or in any way making up a part of the Site. <br>
                    • Except as may be the result of standard search engine or Internet browser usage, use, launch, develop, or distribute any automated system, including without limitation, any spider,
                    robot, cheat utility, scraper, or offline reader that accesses the Site, or using or launching any unauthorized script or other software. <br>
                    • Use a buying agent or purchasing agent to make purchases on the Site. <br>
                    • Make any unauthorized use of the Site, including collecting usernames and/or email addresses of users by electronic or other means for the purpose of sending unsolicited email, or
                    creating user accounts by automated means or under false pretenses. <br>
                    • Use the Site as pan of any effort to compete with us or othenvise use the Site and/or the Content for any revenue-generating endeavor or commercial enterprise. <br>
                    • Use the Site to advertise or offer to sell goods and services. <br>
                    • Sell or othemise transfer your profile. <br>
                </p>
            </div>
            <!-- Submit -->
            <div>
                <input type="submit" value="Agree &rarr;" name="tos_status">
            </div>
        </fieldset>
    </form>
</body>

</html>