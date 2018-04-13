package com.example.yash.a5automaticcallrecorder;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Toast;
import android.widget.ToggleButton;

public class MainActivity extends AppCompatActivity {
    ToggleButton startandoff;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        startandoff=(ToggleButton)findViewById(R.id.toggleButton2);
    }


    public void tooglebutton(View view)
    {

    boolean checked=((ToggleButton)view).isChecked();
        if (checked){

       Intent intent=new Intent(this,RecordingService.class);
        startService(intent);
         Toast.makeText(getApplicationContext(),"Call Recording STARTED",Toast.LENGTH_SHORT).show();

    }else {

            Intent intent=new Intent(this,RecordingService.class);
            stopService(intent);
            Toast.makeText(getApplicationContext(),"Call Recording STOPED",Toast.LENGTH_SHORT).show();

        }
    }
}
