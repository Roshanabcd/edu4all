import time
import os
import platform
from colorama import init, Fore
from termcolor import colored
import pandas as pd
from selenium import webdriver
from selenium.webdriver.support import expected_conditions as EC
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.common.action_chains import ActionChains

# Initialize colorama for colored output
init(autoreset=True)

# Clear the screen based on the operating system
def clear_screen():
    if platform.system() == "Windows":
        os.system("cls")
    else:
        os.system("clear")

# Create an ASCII art banner
def display_banner():
    banner = """
    ██████╗ ██╗   ██╗███████╗███████╗███████╗███████╗███████╗
    ██╔══██╗██║   ██║██╔════╝██╔════╝██╔════╝██╔════╝██╔════╝
    ██████╔╝██║   ██║███████╗███████╗███████╗███████╗███████╗
    ██╔══██╗██║   ██║╚════██║╚════██║╚════██║╚════██║╚════██║
    ██████╔╝╚██████╔╝███████║███████║███████║███████║███████║
    ╚═════╝  ╚═════╝ ╚══════╝╚══════╝╚══════╝╚══════╝╚══════╝
    """
    print(colored(banner, "cyan"))

# Initialize the WebDriver (make sure you have the appropriate driver installed)
driver = webdriver.Chrome(executable_path="path/to/chromedriver")

# Open WhatsApp Web
driver.get("https://web.whatsapp.com/")
print("Scan the QR code using your phone to log in to WhatsApp Web.")

# Wait for user to scan QR code
input("Press Enter after scanning the QR code...")

# Read data from an Excel file (you can customize this part)
df = pd.read_excel("path/to/your/excel/file.xlsx")

# Iterate through each row and send messages
for index, row in df.iterrows():
    name = row["Name"]
    phone_number = row["Phone Number"]
    message = row["Message"]

    # Search for the contact
    search_box = driver.find_element(By.XPATH, "//div[@contenteditable='true']")
    search_box.send_keys(phone_number)
    search_box.send_keys(Keys.ENTER)

    # Wait for the chat to load
    WebDriverWait(driver, 10).until(EC.presence_of_element_located((By.XPATH, "//div[@class='_1awRl copyable-text selectable-text']")))

    # Send the message
    message_box = driver.find_element(By.XPATH, "//div[@class='_1awRl copyable-text selectable-text']")
    message_box.send_keys(message)
    message_box.send_keys(Keys.ENTER)

    print(f"Message sent to {name} ({phone_number}): {message}")

# Close the browser
driver.quit()