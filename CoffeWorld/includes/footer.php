<footer>
    <div id="footer-content">
        <p>&copy; 2024 Coffee World. All rights reserved.</p>
        <nav>
            <ul>
                <li><a href="../pages/contact_us.php">Contact Us</a></li>
            </ul>
        </nav>
    </div>
</footer>

<style>
    /* General Reset */
    body {
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
        display: flex;
        flex-direction: column;
        min-height: 100vh; /* Ensures the page takes full height */
    }

    /* Content area - for flexibility with footer */
    main {
        flex-grow: 1;
    }

    /* Footer styling */
    footer {
        background-color: black; /* Same dark blue as the header */
        color: white;
        padding: 20px 0;
        text-align: center;
        margin-top: auto; /* Push footer to the bottom */
    }

    /* Footer content */
    #footer-content {
        max-width: 1200px;
        margin: 0 auto;
    }

    /* Footer navigation */
    footer nav ul {
        display: flex;
        justify-content: center;
        padding: 0;
        margin: 10px 0;
        list-style: none;
    }

    footer nav ul li {
        margin: 0 15px;
    }

    footer nav ul li a {
        text-decoration: none;
        color: white;
        font-size: 14px;
        font-weight: bold;
        transition: color 0.3s;
    }
</style>
