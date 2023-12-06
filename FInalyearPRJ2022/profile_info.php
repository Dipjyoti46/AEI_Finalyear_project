
<div class="user-info-container">
    <div class="account-info">
        <div class="user-info-content">
            <div class="user-info">
                <h5>Name</h5>
                <p><?php
                echo $_SESSION['firstname']." ".$_SESSION['lastname'];
                ?></p>
                
            </div>
            <div class="user-info">
                <h5>Email</h5>
                <p>
                    <?php
                    echo $_SESSION['email'];
                    ?>
                </p>
            </div>
            <div class="user-info">
                <h5>State</h5>
                <p>
                    <?php
                    echo $_SESSION['states'];
                    ?>
                </p>
            </div>
            <div class="user-info">
                <h5>District</h5>
                <p>
                    <?php
                    echo $_SESSION['districts'];
                    ?>
                </p>
            </div>
            <div class="user-info">
                <h5>Town/village</h5>
                <p>
                    <?php
                    echo $_SESSION['addresse'];
                    ?>
                </p>
            </div>
            <div class="user-info">
                <h5>Pincode</h5>
                <p>
                    <?php
                    echo $_SESSION['pin'];
                    ?>
                </p>
            </div>
            <div class="user-info">
                <h5>Date of Birth</h5>
                <p>
                    <?php
                    echo $_SESSION['dob'];
                    ?>
                </p>
            </div>
            <div class="user-info">
                <h5>Phone number</h5>
                <p>
                    <?php
                    echo $_SESSION['phone'];
                    ?>
                </p>
            </div>
            <div class="user-info">
                <h5>Gender</h5>
                <p>
                    <?php echo $_SESSION['gender'];
                    ?>
                </p>
            </div>
        </div>
    </div>
</div>
            
